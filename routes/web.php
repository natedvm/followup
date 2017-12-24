<?php

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

use App\Procedure;

Route::get('/', function () {
    $procedures = Procedure::all();
    $test = \App\Helpers\testIt();
    Debugbar::info($test);
    return view('layouts.allcases',['procedures' => $procedures]);
});