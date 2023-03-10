<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('Pages');
    }
    public function show(Request $request){
        $name = $request->name;
        $age = $request->age;

       
        print_r($name );
        
        echo'<br>';
        
        print_r( $age);
    }
}
