<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paginationController extends Controller
{
    function show(){

        $students=DB::select('select * from students');
       // $students=DB::table('students')->paginate(5);
        $students=DB::table('students')->simplePaginate(3);
        return view('pagination',['students'=>$students]);
    }
}
