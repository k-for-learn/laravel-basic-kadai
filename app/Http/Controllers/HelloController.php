<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // return 'Hello,World!';
        // return view('index');
        $name = 'test_test';
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];


        return view('index', compact('name', 'languages'));
    }
}
