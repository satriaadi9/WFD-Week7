<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        $display = "Display from controller<br>";
        $display .= "Parameter 1: ". $request->param1. "<br>";
        if(isset($request->param2)){
            $display .= "Parameter 2: ". $request->param2; 
        }
        // return $display;

        $param1 = $request->param1;
        $param2 = $request->param2;

        // return view('home',['display' => $display]);

        return view('home', ['param1' => $param1, 'param2' => $param2]);
    }
}
