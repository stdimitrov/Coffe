<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Coffe;

class UserController extends Controller
{
    public function list() {
        return view('auth/profile');
    }
}
