<?php

namespace App\Http\Controllers;

class PageController extends Controller {

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function index()
    {
        echo 'Get up the yard';
    }

    public function home()
    {
        echo '<h1>Go home ye English bastards</h1>';
    }


    
}
