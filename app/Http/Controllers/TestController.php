<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test(){
        return inertia('Index/Test',['message'=>'Hello']);
    }
}
