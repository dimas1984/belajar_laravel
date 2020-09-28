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
    return view('welcome');
});

Route::get('/belajar-route', function () {
    return 'Hello World';
});

Route::get('/home', function () {
    return 'Nama';
});

// route menggunakan parameter
Route::get('/belajar/{page}', function ($page) {
    return "Hello, ini halaman Belajar Route ".$page;
});

// route menggunakan parameter
Route::get('/tugas/{hasil}', function ($hasil) {
    $a=1;
    $b=3;
    $hasil=$a+$b;
    // var_dump($hasil);
    // die();
    return "nilai penjumlahannya dari a dan b adalah=".$hasil;

});

//route menggunakan optional parameter
Route::get('/belajar-optional/{page?}', function ($page='home') {
    return "Hello, Anda sedang mengakses halaman ".$page;
});

Route::get('/belajar-optional-satu/{page?}', function ($page=1) {
    return "Hello, Anda sedang mengakses halaman ".$page;
});

Route::get('dosen', 'DosenController@index');

Route::get('dosenku','DosenController@home');

Route::get('tugas_pertama','tugas_controller_pertama@tambah');

route::get('coba','percobaan@index');

Route::get('/blade', function () {
    return view('components.belajar_bootstrap', ['name' => 'Andi']);
    });

    // blade tanpa folder
Route::get('/hello', function () {
        return view('hello', ['name' => 'blade diluar folder']);
        });

    // blade pada folder
    Route::get('/helloword', function () {
        return view('blog.helloword', ['name' => 'blade didalam fodler']);
        });

        Route::get('/hellocontroller','WelcomeController@hello');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
