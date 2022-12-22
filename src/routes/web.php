<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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
Route::get('/top', function () {
    return view('app');
});
// Route::get('hello', function () {
//     return view('app');
// });

Route::get('/contact', [HelloController::class, 'index']);
