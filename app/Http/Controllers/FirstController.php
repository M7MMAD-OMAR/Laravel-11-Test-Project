<?php

namespace App\Http\Controllers;

class FirstController extends Controller
{

    public function __construct()
    {
        // Old version
//        $this->middleware('test:3,4');
//        $this->middleware('test:1,1')->only(['index']);
    }

    public function index()
    {
        return "hello world from first controller";
    }
}
