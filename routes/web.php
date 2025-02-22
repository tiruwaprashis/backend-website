<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
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
use App\Http\Controllers\SubmissionController;

use App\Http\Controllers\TestimonialController;


Route::get('/', [TestimonialController::class, 'index']);

Route::post('/sub', [SubmissionController::class, 'store']);





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
