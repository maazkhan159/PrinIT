<?php

namespace App\Http\Controllers;

use App\Address;
use App\FileInfo;
use App\Files;
use App\Images;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AmazonController extends Controller
{
    private $user_id ;

    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }

    public function getFiles(){
        $addresses = Address::where('user_id',$this->user_id)->get();
        $files = Files::where(['user_id'=> $this->user_id , "type" => "amazon"])->orderBy('id', 'desc')->get();
        $images = Images::where('user_id',$this->user_id)->get();

        return view('panel/amazon')->with(compact('files'))->with(compact('addresses'))->with(compact('images'));
    }
    public function getTextFiles(){
        $addresses = Address::where('user_id',$this->user_id)->get();
        $files = Files::where(['user_id'=> $this->user_id , "type" => "amazontext"])->orderBy('id', 'desc')->get();
        return view('panel/amazontextfile')->with(compact('files'))->with(compact('addresses'));
    }
    public function deleteFile($id)
    {
        $files = Files::destroy($id);
        FileInfo::where('file_id',$id)->delete();

        return redirect()->back()->with('status', ' File has been deleted successfully');
    }
}
