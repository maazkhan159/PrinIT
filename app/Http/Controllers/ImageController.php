<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller

{
    private $user_id ;

    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }
    public  function index(){
        $images = $this->getImages();
        return view('panel/logo')->with(compact('images'));
    }
    public  function savelogo(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'logo' => 'required',
        ]);

        if(array_key_exists('logo', $input)) {
            //  save file in server and get saved path
            $file = $input['logo'];
            $filename = time() . '.' . $file->getClientOriginalName();
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if ($ext == "png" || $ext == "jpeg" || $ext == "jpeg") {

                $file->move(public_path('/user_logo'), $filename);
                $path = '/user_logo/' . $filename;


                // assign logo path
                $input['logo'] = $path;
                $input['name'] = $file->getClientOriginalName() . '_' . time();

                $input['user_id'] = $this->user_id;
                // now saving in db

                Images::create($input);
                return redirect()->back()->with('status', ' Your PPI Image has been sucessfully added');
            } else {

                return redirect()->back()->with('error', 'Wrong format');

            }
        }
        return redirect()->back()->with('error', 'Image is required');


    }
    public function getImages()
    {
        return Images::where('user_id',$this->user_id)->get();
    }

    public function deleteImage($id){
        $image =  Images::where('user_id',$this->user_id)->where('id',$id)->first();

        Images::destroy($id);
        $path = public_path($image->logo);
        //  File::delete($path);
        return redirect()->back()->with('status', ' Your file has been deleated sucessfully');
    }

}
