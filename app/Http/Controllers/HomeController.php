<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function test($id,$name)
    {
        return view('home.test',['id'=>$id,'name'=>$name]);
        /*
    echo"ID Number:",$id;
    echo"Name:",$name;
    for($i=1;$i<=$id;$i+=1){
        echo "<br> $i-$name";
    }
        */
    }

}

