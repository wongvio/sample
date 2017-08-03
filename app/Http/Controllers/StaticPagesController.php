<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    Public function home()
    {
      return view('static_pages/home');
    }

    Public function help()
    {
      return view('static_pages/help');
    }

    Public function about()
    {
      return view('static_pages/about');
    }
}
