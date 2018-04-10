<?php

namespace App\Http\Controllers;

use App\AmazaonFile;
use App\EbayFile;
use App\FileInfo;
use App\Files;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class StatsController extends Controller
{
    public function __construct()
    {
        $this->user_id = Auth::user()->id;

    }
    public function getEbayStats($file_id){
        $file  = Files::where(['user_id'=>$this->user_id,  'id' =>$file_id])->first();
       if(is_null($file)){
           return redirect()->back()->with('error', 'You are trying wrong file!');;
       }
        $count = EbayFile::where('file_id', $file_id)->count();
        $max_sale = EbayFile::where('file_id', $file_id)->max('sale_price');
        $sum = EbayFile::where('file_id', $file_id)->sum('sale_price');
        $data = ['count'=>$count,'max_sale'=>$max_sale , 'sum_of_sale' => $sum];

        return view('panel/ebay_stats')->with(compact('data'));




    }
    public function getAmazonStats($file_id){
        $file  = Files::where(['user_id'=>$this->user_id,  'id' =>$file_id])->first();
        if(is_null($file)){
            return redirect()->back()->with('error', 'You are trying wrong file!');;
        }
        $count = AmazaonFile::where('file_id', $file_id)->count();
        $data = ['count'=>$count];

        return view('panel/amazon_stats')->with(compact('data'));



    }

    public function getSimpleStats($file_id){
        $file  = Files::where(['user_id'=>$this->user_id,  'id' =>$file_id])->first();
        if(is_null($file)){
            return redirect()->back()->with('error', 'You are trying wrong file!');;
        }
        $count = FileInfo::where('file_id', $file_id)->count();

        $data = ['count'=>$count];

        return view('panel/simple_stats')->with(compact('data'));



    }
}
