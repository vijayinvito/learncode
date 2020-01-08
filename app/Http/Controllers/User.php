<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
class User extends Controller
{
    function index(){
       
        // echo "Fine";
        //  $user = Users::all();
         $user = Users::find(75);
        return $user;
    }
    function checkDb(){
        $user = DB::select('select * from user');
        // print_r($user);
        return $user;
    }
    function builder(){
        //$user = DB::table('user')->max('id'); 
        // $user = DB::table('user')
        // ->where('id','4')
        // ->update([
        //     'username'=> 'Himant',
        //     'email' =>'himant23@gmail.com',
        //     'password' => '8945242'
        // ]);
        $user = DB::table('user')
        ->join('company','user.id','company.user_id')
        ->where('username','Himant')
        ->get();
        return $user;
    }
}
