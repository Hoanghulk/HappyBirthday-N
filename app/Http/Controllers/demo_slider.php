<?php

namespace App\Http\Controllers;

use App\Models\demo_banner;
use Illuminate\Http\Request;

class demo_slider extends Controller
{
    public function slider() {
        $banners = demo_banner::query()->where('status', 1)
            ->orderBy('order')->get();
        return view('clients.slider', [
            'banners'=>$banners
        ])
            ->with('title', 'Slider');
    }

    public function store(Request $request) {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientoriginalName();
            dd($file_name);
        }
    }
}
