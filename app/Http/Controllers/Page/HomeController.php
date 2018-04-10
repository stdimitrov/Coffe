<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function page1() {
        return view('page1');
    }

    public function page2() {
        return view('page2');
    }

    public function page3() {
        return view('page3');
    }
}
