<?php

namespace App\Http\Controllers;

use App\FileInfo;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

use App\Http\Requests;

class FileInfoController extends Controller
{
    public function getFileInfo($id) {

        $file_info = FileInfo::where('file_id',$id)->get();

        return view('file_info')->with(compact('file_info'));
    }
    public function pdfview(Request $request ,$id)
    {
        $items = FileInfo::where('file_id',$id)->get();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }


        return view('pdfview');
    }
}
