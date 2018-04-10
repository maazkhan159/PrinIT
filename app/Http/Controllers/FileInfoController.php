<?php

namespace App\Http\Controllers;

use App\Address;
use App\AmazaonFile;
use App\EbayFile;
use App\TextFile;
use App\FileInfo;
use App\Files;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class FileInfoController extends Controller
{
    private $user_id ;

    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }
    public function getFileInfo($id, Request $request) {
        $input = $request->all();
        $address_id = $input['address_id'];
        $address = Address::where('user_id',$this->user_id)->where('id',$address_id)->first();
        $file = Files::where('id',$id)->first();

        if($file->type=="simple"){
            $result = FileInfo::where('file_id',$id)->get();
            $file_info = [];


            foreach ($result as $key =>$value){
                $info['name'] = $result[$key]['name'];
                $info['quantity'] = $result[$key]['quantity'];
                $info['product_name'] = $result[$key]['product_name'];
                $info['date'] =$result[$key]['date'];
                $info['address'] =$result[$key]['address'];
                $info['city'] = '';
                $info['state'] = '';
                $info['country'] ='';
                $info['postal'] = '';

                $info['type_of_shipment'] =$result[$key]['type_of_shipment'];
                $info['code'] =$result[$key]['code'];
                array_push($file_info,$info);

            }

        }
        elseif ($file->type == "ebay"){
            $result = EbayFile::where('file_id',$id)->get();
            $file_info = [];

                // info col use in views;
            foreach ($result as $key =>$value){
                $info['name'] = $result[$key]['buyer_full_name'];
                $info['address'] =$result[$key]['buyer_address_1'];
                $info['city'] =$result[$key]['delivery_city'];
                $info['state'] =$result[$key]['delivery_state'];
                $info['country'] =$result[$key]['delivery_country'];
                $info['postal'] =$result[$key]['delivery_postcode'];
                $info['quantity'] = $result[$key]['quantity'];
                $info['product_name'] = $result[$key]['custom_label'];

                $info['date'] =$result[$key]['sale_date'];
                
                $info['type_of_shipment'] =$result[$key]['postage_service'];
                $info['code'] =$result[$key]['item_id'];
                array_push($file_info,$info);

            }
        }
        elseif ($file->type =="amazon" || $file->type =="amazontext"){
            $result = AmazaonFile::where('file_id',$id)->get();

$file_info = [];

                // info col use in views;
            foreach ($result as $key =>$value){
                $info['name'] = $result[$key]['buyer_name'];
                $info['address'] =$result[$key]['ship_address_1'];
                $info['city'] =$result[$key]['ship_city'];
                $info['state'] =$result[$key]['ship_state'];
                $info['country'] =$result[$key]['ship_country'];
                $info['postal'] =$result[$key]['ship_postal_code'];
                $info['quantity'] = $result[$key]['quantity_to_ship'];
                $info['product_name'] = $result[$key]['sku'];

                $info['date'] =$result[$key]['promise_date'];
                
                $info['type_of_shipment'] =$result[$key]['ship_service_level'];
                $info['code'] =$result[$key]['sku'];
                array_push($file_info,$info);

            }
        }


        elseif ($file->type =="textfile"){
            $result = TextFile::where('file_id',$id)->get();

$file_info = [];

                // info col use in views;
            foreach ($result as $key =>$value){
                $info['name'] = $result[$key]['buyer_name'];
                $info['address'] =$result[$key]['ship_address_1'];
                $info['city'] =$result[$key]['ship_city'];
                $info['state'] =$result[$key]['ship_state'];
                $info['country'] =$result[$key]['ship_country'];
                $info['postal'] =$result[$key]['ship_postal_code'];
                $info['quantity'] = $result[$key]['quantity_to_ship'];
                $info['product_name'] = $result[$key]['product_name'];

                $info['date'] =$result[$key]['promise_date'];
                
                $info['type_of_shipment'] =$result[$key]['ship_service_level'];
                $info['code'] =$result[$key]['sku'];
                array_push($file_info,$info);

            }
        }


        return view('file_info')->with(compact('file_info'))->with(compact('address'));
    }

}
