<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HappyBirthdayController extends Controller
{
    public function index() {
        return view('Hoang.happy_birthday');
    }
}
