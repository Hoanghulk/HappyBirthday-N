<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo_slider;
use App\Http\Controllers\Banners\banner_laravel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('slider', [demo_slider::class, 'slider'])->name('slider');

Route::group(['prefix' => 'banner'], function () {
   Route::get('list', [banner_laravel::class, 'list'])->name('clients.banner.list');

   Route::match(['GET', 'POST'], 'store', [banner_laravel::class, 'store'])->name('clients.banner.store');

   Route::match(['GET', 'POST'], '{id}/edit', [banner_laravel::class, 'edit'])->name('clients.banner.edit');

   Route::post('{id}/update-status', [banner_laravel::class, 'update-status'])->name('clients.banner.update-status');

});

Route::get('javascript', [\App\Http\Controllers\JS::class, 'index'])->name('js');
Route::get('key-event', [\App\Http\Controllers\JS::class, 'index2'])->name('key-event');
Route::get('index', [\App\Http\Controllers\JS::class, 'index3'])->name('project.index');

Route::get('happy-birthday', [\App\Http\Controllers\HappyBirthdayController::class, 'index'])->name('Hoang.happy_birthday');
