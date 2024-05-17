<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    //$user = ['name' => 'Marco', 'surname' => 'Bianchi'];
    $data = [
        'user' => ['name' => 'Marco', 'surname' => 'Bianchi']
    ];
    return view('home', $data); //compact('user'));
});

Route::get('/contatti', function () {
    $user = ['name' => 'Marco', 'surname' => 'Bianchi'];
    return view('contact', compact('user'));
});