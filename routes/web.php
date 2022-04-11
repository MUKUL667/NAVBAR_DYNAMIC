<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MENUCONTROLLER;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [MENUCONTROLLER::class, 'index']);
Route::get('/delete/{id}', [MENUCONTROLLER::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [MENUCONTROLLER::class,'edit'])->name('edit');
route::get('/add', [MENUCONTROLLER::class,'addpost'])->name('add.post');

route::post('/add', [MENUCONTROLLER::class,'savepost'])->name('save.post');

route::post('/update', [MENUCONTROLLER::class,'updatepost']);