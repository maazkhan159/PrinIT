<?php

namespace App\Http\Controllers;

use App\FileInfo;
use App\Files;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class CsvParsingController extends Controller
{
    public function saveFile(Request $request)
    {
        $input = $request->all();
        if(array_key_exists('file', $input)) {
            $file = $input['file'];
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('/uploadedCsv'), $filename);
            $path = public_path('/uploadedCsv/') . $filename;
            $data = $this->parsing($path);
            $file_inserted_id = $this->saveFileNameInDB($filename);
            $this->saveFileInfo($data, $file_inserted_id);
            return redirect('user_dashboard')->with('status', 'File has been added successfully!');
        }
        else {
            return redirect()->back()->with('error', 'File is missing!');
        }



    }
    private  function parsing($path){
        $data = Excel::load($path, function($reader) {})->toArray();
        return $data;

    }
    private  function saveFileNameInDB($fileName){
       $file = new Files();
       $file->file_name = $fileName;
       $file->user_id = Auth::user()->id;
       $res = $file->save();
       return $file->id;
    }
    private  function saveFileInfo($data,$file_id){
        foreach ($data as $key => $value ) {

            $data[$key]['file_id'] = $file_id;
        }

        FileInfo::insert($data);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
