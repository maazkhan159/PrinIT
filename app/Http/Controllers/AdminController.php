<?php

namespace App\Http\Controllers;

use App\Files;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function employeeList(){
        $users = User::withTrashed()->get();
        //dump($users);die();
        return view('panel/employee_list')->with(compact('users'));
    }
    public function stats($user_id){
        $filesCount = Files::where('user_id', $user_id)->groupBy('type')->select('type', DB::raw('count(*) as total'))->get();
        $filesCountMonthly = Files::where('user_id', $user_id)->groupBy('type')->whereMonth('created_at', '=', date('m'))->select('type', DB::raw('count(*) as total'))->get();
        $current_month = $data = ['amazon' =>  0 ,'amazontext'=>0 ,'ebay' =>  0 ,'simple'=>0 ];
        foreach ($filesCount as $file){
            $data[$file->type] = $file->total;
        }
        foreach ($filesCountMonthly as $file){
            $current_month[$file->type] = $file->total;
        }
        $data['amazon']+= $data['amazontext'];

        $current_month['amazon']+= $current_month['amazontext'];

        return view('panel/employee_stats')->with(compact('data'))->with(compact('current_month'));
    }
    public function removeEmployee($user_id){

        $user = User::withTrashed()->where('id',$user_id)->first();
            if(!is_null($user->deleted_at)){
                $user->restore();
            }
            else{
                $user->delete();
            }

        return redirect()->back();

}

}
