<?php

namespace App\Http\Controllers;

use App\Address;
use App\FileInfo;
use App\Files;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    private $user_id;

    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }

}
