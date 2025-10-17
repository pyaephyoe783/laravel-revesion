<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('/home',HomeController::class);










// Route::get('post')
// Route::post('post')
// Route::get('post/{id}/edit')
// Route::put('post/{id}')
// Route::delete('post/{id}')


// Route::get('/', function () {
//      $data = [
//         'home1' => 'home_value1',
//         'home2' => 'home_value2',
//         'home3' => 'home_value3',
//     ];
//     return view('home',compact('data'));
// });

// Route::get('contact/{name}',function ($name){
//     $data = request('name');
//     // return $data;
//     return view('contact',['data'=>$data]);
// });

// Route::get('about', function () {

//     $data = [
//         'about1' => 'about_value1',
//         'about2' => 'about_value2',
//         'about3' => 'about_value3',
//     ];

//     return view('about', compact('data'));
// });

// Route::get('contact', function () {

//     $data = [
//         'contact1' => 'contact_value1',
//         'contact2' => 'contact_value2',
//         'contact3' => 'contact_value3',
//     ];
//     return view('contact', compact('data'));
// });

