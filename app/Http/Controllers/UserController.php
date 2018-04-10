<?php

namespace App\Http\Controllers;

use App\Files;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $user_id ;

    public function __construct()
    {
        $this->user_id = Auth::user()->id;
    }
    public function dashboard(){
    $filesCount = Files::where('user_id', $this->user_id)->groupBy('type')->select('type', DB::raw('count(*) as total'))->get();
    $filesCountMonthly = Files::where('user_id', $this->user_id)->groupBy('type')->whereMonth('created_at', '=', date('m'))->select('type', DB::raw('count(*) as total'))->get();


    $data = [];
        $current_month = [];
    foreach ($filesCount as $file){
        $data[$file->type] = $file->total;
    }
    foreach ($filesCountMonthly as $file){
        $current_month[$file->type] = $file->total;
    }
    $data['amazon']+= $data['amazontext'];
     $current_month['amazon']+= $current_month['amazontext'];
    return view('panel/user_dashboard')->with(compact('data'))->with(compact('current_month'));
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
       return redirect()->back()->with('status', 'Profile image has been updated successfully!');;



    }
    public  function resetPassword(Request $request){

        $this->validate($request,[
            'password' => 'required|min:6|confirmed',
        ]);

        User::where('id',$this->user_id)->update(['password' =>  bcrypt($request->all()['password'])]);
        return redirect()->back()->with('status', 'Your password has been updated sucessfully!');
    }
}
