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
    public function getAmazonDownload(){
        $filename="simple.xlsx";
        $path = public_path('/samplefiles/') . $filename;
        return Response::download($path);
    }

}
