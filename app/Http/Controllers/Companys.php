<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Companys extends Controller
{
    //list of Company

    public function list()
    {   

        $data=  DB::table('company_name')->paginate(10);
        return view('list',['data' => $data]);
    }
}
