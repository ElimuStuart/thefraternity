<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function index(){
        // some logic
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

}
