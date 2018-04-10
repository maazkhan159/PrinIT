<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class DownloadFileController extends Controller
{
    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }
    public function getSimpleSampleFile(){
        $filename="simple.xlsx";
        $path = public_path('/samplefiles/') . $filename;
        return Response::download($path);
    }
    public function getAmazonCsvSampleFile(){

        $filename="Amazon.Csv";
        $path = public_path('/amazoncsv/') . $filename;
        return Response::download($path);
    }
    public function getAmazonTextSampleFile(){

        $filename="amazon.txt";
        $path = public_path('/amazontext/') . $filename;
        return Response::download($path);
    }
    public function getEbayCsvSampleFile(){

        $filename="eBay.csv";
        $path = public_path('/ebay/') . $filename;
        return Response::download($path);
    }

}
