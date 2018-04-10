<?php

namespace App\Http\Controllers;

use App\AmazaonFile;
use App\EbayFile;
use App\TextFile;
use App\FileInfo;
use App\Files;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class CsvParsingController extends Controller
{
    private $keys;
    public function saveFile(Request $request)
    {
        $input = $request->all();
        if(array_key_exists('file', $input)) {
            $file = $input['file'];
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('/uploadedCsv'), $filename);
            $path = public_path('/uploadedCsv/') . $filename;
            $type = $input['type'];
            $data = $this->parsing($path ,$type);

            if(!$data){
                unlink($path);
                return redirect()->back()->with('error', 'Wrong format uploaded! ');

            }
            $file_inserted_id = $this->saveFileNameInDB($filename , $type);
            $this->saveFileInfo($data, $file_inserted_id , $type);
            unlink($path);
            return redirect()->back()->with('status', 'File has been added successfully!');
        }
        else {
            return redirect()->back()->with('error', 'File is missing!');
        }



    }
    private  function parsing($path ,$type){
         $ext = pathinfo($path, PATHINFO_EXTENSION);
        if($type == "amazontext"){
            if($ext != "txt") return false;
            return $this->amazonTextFileParsing($path);

        }
        if($ext == "csv" || $ext == "xlsx") {

            $data = Excel::load($path, function ($reader) {
            })
                ->toArray();
            $parsed_data = [];

            if ($type == "ebay" && (!array_key_exists('sales_record_number', $data[0]))) {
                return false;
            } else if ($type == "amazon" && !array_key_exists('order_item_id', $data[0])) {
                return false;

            } else if ($type == "simple" && !array_key_exists('address', $data[0])) {
                return false;

            }

            foreach ($data as $value) {


                if (array_key_exists('address', $value) || array_key_exists('sales_record_number', $value)
                    || array_key_exists('order_item_id', $value)) {

                    array_push($parsed_data, $value);
                }

            }


            return $parsed_data;
        }
        else
        {return false;}

    }
    private function amazonTextFileParsing($path){
        $file = $path;

        $fopen = fopen($file, "r");

        $fread = fread($fopen,filesize($file));

        fclose($fopen);

        $remove = "\n";

        $split = explode($remove, $fread);

        $array[] = null;
        $tab = "\t";

        foreach ($split as $string)
        {
            $row = explode($tab, $string);
            array_push($array,$row);
        }

        array_shift($array);
        $this->keys = array_shift($array);

        array_pop($array);


        $this->keys = array_map(function ($key){
            $key = str_replace("-","_",$key);
            return trim($key);
        },$this->keys);
        $array = array_map( function ($arr)
        {
            return array_combine(($this->keys), ($arr));
        },$array);
        return $array;
    }

    private  function saveFileNameInDB($fileName ,  $type){
        $file = new Files();
        $file->file_name = $fileName;
        $file->type = $type;
        $file->user_id = Auth::user()->id;
        $res = $file->save();
        return $file->id;
    }

    private  function saveFileInfo($data,$file_id , $type){
        foreach ($data as $index => $value ) {

            $data[$index]['file_id'] = $file_id;
            if ($type == "amazon" || $type == "amazontext") {
                $model = new AmazaonFile();

            } elseif ($type == "ebay") {
                $model = new EbayFile();

            }
            elseif ($type == "textfile") {
                $model = new TextFile();
            }

            elseif ($type == "simple") {
                $model = new FileInfo();

            }


            foreach ($value as $key => $val  ) {
                $model[$key] = $val;
                $model['file_id'] = $file_id;
            }
            $model->save();
        }




    }

}
