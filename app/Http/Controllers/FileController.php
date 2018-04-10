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
    public function deleteFile($id)
    {
        $files = Files::destroy($id);
        FileInfo::where('file_id',$id)->delete();

        return redirect()->back()->with('status', 'File has been deleted successfully!');
    }
}
