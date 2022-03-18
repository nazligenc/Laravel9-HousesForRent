<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|asdasadasdja
*/

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa','/home')->name('anasayfa');
Route::get('/', function () {
    return view('home.index',['name'=>'Nazliii']);
});
//asdfghygfd


Route::get('/home',[homeController::class,'index'])->name('home');;
//Route::get('/test/{id}/{name}',[homeController::class,'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}',[homeController::class,'test'])->whereNumber('id')->whereAlpha('name')->name('test');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
