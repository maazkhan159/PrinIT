<?php

namespace App\Http\Controllers;

use App\Address;
use App\FileInfo;
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
        $file_info = FileInfo::where('file_id',$id)->get();
        return view('file_info')->with(compact('file_info'))->with(compact('address'));
    }
//    public function pdfview(Request $request ,$id)
//    {
//        $items = FileInfo::where('file_id',$id)->get();
//        view()->share('items',$items);
//        if($request->has('download')){
//            $pdf = PDF::loadView('pdfview');
//            return $pdf->download('pdfview.pdf');
//        }
//        return view('pdfview');
//    }
}
