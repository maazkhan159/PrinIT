<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user_id ;

    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }

    public  function index(){
        $user = Auth::user();
        return view('panel/edit_profile')->with(compact('user'));
    }
    public  function update(Request $request){
        $input = $request->all();

        if(array_key_exists('profile_image', $input)) {

            $file = $input['profile_image'];
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('/user_profile_image'), $filename);
            $path = '/user_profile_image/' . $filename;
            // assign logo path
            $input['profile_image'] = $path;
        }
        array_shift($input);
        User::where('id',$this->user_id)->update($input);
       return redirect()->back();



    }
    public  function resetPassword(Request $request){

        $this->validate($request,[
            'password' => 'required|min:6|confirmed',
        ]);

        User::where('id',$this->user_id)->update(['password' =>  bcrypt($request->all()['password'])]);
        return redirect()->back();
    }
}
