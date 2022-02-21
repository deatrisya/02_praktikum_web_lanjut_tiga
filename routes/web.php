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
Use App\Http\Controllers\CompanyController;
Use App\Http\Controllers\ContactusController;


Route::get('/', [CompanyController::class,'index']);

//route prefix
Route::prefix('category')->group(function() {
    Route::get('/marbel-edu-games', [CompanyController::class,'games1']);
    Route::get('/marbel-and-friends-kids-games', [CompanyController::class,'games2']);
    Route::get('/riri-story-books', [CompanyController::class,'games3']);
    Route::get('/kolak-kids-songs', [CompanyController::class,'games4']);
});

//route param
Route::get('/news/{id}', [CompanyController::class,'news']);

//route prefix
Route::prefix('program')->group(function () {
    Route::get('karir',[CompanyController::class,'program1']);
    Route::get('magang',[CompanyController::class,'program2']);
    Route::get('kunjungan-industri',[CompanyController::class,'program3']);
});

Route::get('/about-us',[CompanyController::class,'about']);

Route::resource('contact-us', ContactusController::class);




