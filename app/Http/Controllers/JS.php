<?php

namespace App\Http\Controllers;

use App\Models\demo_banner;
use Illuminate\Http\Request;

class JS extends Controller
{
    public function index() {

        return view('Work JS.JS');
    }
    public function index2() {

        return view('Work JS.key-event');
    }
    public function index3() {

        return view('Work JS.project.index');
    }
}
