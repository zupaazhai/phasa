<?php

namespace Zupaazhai\Phasa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AppController extends Controller
{
    public function index(Request $request)
    {
        return view('phasa::app');
    }
}
