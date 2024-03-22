<?php

// $angka = "abc";

// array[$angka = "abc"]


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;

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
    return view('landing');
});

Route::get('/restaurant', function () {
    return view('restaurant', [
        'restaurants' => Restaurant::all()
    ]);
});

Route::get('/restaurant/detail/{endpoint}', [RestaurantController::class, 'show'])->name('detail');




// Route::get('/home', function () {
//     return view('home', [
//         'name' => "Dandy",
//         'age' => 20,
//         'gender' => 'male',
//     ]);
// });

// Route::get('/about', function () {
//     return view('about', [
//         'university' => 'Telkom',
//         'major' => 'Software Engineering',
//         'faculty' => 'Informatic'
//     ]);
// });

// Route::get('/contact', function () {
//     return view('contact', [
//         'email' => 'dandy@gmail.com',
//         'phone' => '085607340053',
//         'address' => 'Ketintang'
//     ]);
// });
