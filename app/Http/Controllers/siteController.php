<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    //
    public function index()
    {
        return 'Hello World!';
    }

    public function welcome()
    {
        $name = "<span style='color:red;'>world</span>";
        return view('site.about',[
            'name' => $name,
            'value' => 'value'
        ]);
    }

    public function contact()
    {
        return view('site.contact');
    }
}
