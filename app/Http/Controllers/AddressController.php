<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Files\File;


class AddressController extends Controller
{
    private $user_id ;

    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }
    public  function index(){
        $addresses = $this->getAddresses();
        return view('panel/add_information')->with(compact('addresses'));
    }
    public  function saveAddress(Request $request){
        $input = $request->all();

//        save file in server and get saved path
        $file = $input['logo'];

        $filename = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('/user_logo'), $filename);
        $path = '/user_logo/'.$filename;
        // assign logo path
        $input['logo'] = $path;
        $input['user_id'] = $this->user_id;
        // now saving in db

        Address::create($input);
        return redirect()->back();



    }
    public function getAddresses()
    {
        return Address::where('user_id',$this->user_id)->get();
    }

    public function deleteAddress($id){
        $address =  Address::where('user_id',$this->user_id)->where('id',$id)->first();

        Address::destroy($id);
       $path = public_path($address->logo);
      //  File::delete($path);
        return redirect()->back();
    }
}
