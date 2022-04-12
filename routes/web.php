<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductReviewsController;

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
})->name('home');

Route::get('/accordion-component', function () {
    return view('accordion-component');
});

Route::get('/wirecutter-clone', [ProductReviewsController::class, 'index']);