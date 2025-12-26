<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    protected $myvarlue2 ;
    public $myval = "";
    //Constructor
    //MyController()
    function __construct(){

    }

    function index(){
        return view('Myview.index');
    }

    function info(){
        return view('Myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data ['num'] = $req->input('mynumber');
        return view('Myview.calculate' , $data);
    }
    function store(Request $request)
    {
        return view('Myview.result', [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob' => $request->dateofbirth,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'color' => $request->favoritecolor,
            'genre' => $request->genre,
            'consent' => $request->consent ? 'ยินยอม' : 'ไม่ยินยอม',
        ]);
    }
    
}

