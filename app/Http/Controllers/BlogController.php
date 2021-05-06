<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function readIndex(){
        return view('read');

    }

    public function writeIndex(){
        return view('write');

    }

    public function submitBlogPost(){


    }
}
