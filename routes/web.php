<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\MENUCONTROLLER;
use App\Http\Controllers\SUBMENUCONTROLLER;


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
Route::get('/', function () {
    return view('welcome');
});
 

//////////////////////////////////

Route::get('/index', [MENUCONTROLLER::class, 'index']);
Route::get('/delete/{id}', [MENUCONTROLLER::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [MENUCONTROLLER::class,'edit'])->name('edit');
route::get('/add', [MENUCONTROLLER::class,'addpost'])->name('add.post');

route::post('/add', [MENUCONTROLLER::class,'savepost'])->name('save.post');

route::post('/update', [MENUCONTROLLER::class,'updatepost']);

///ROUTES OF SUBMENU
// Route::get('/submenu', [SUBMENUCONTROLLER::class, 'index']);
route::get('/submenuadd', [SUBMENUCONTROLLER::class,'addpost'])->name('add.post');

route::post('/submenuadd', [SUBMENUCONTROLLER::class,'savepost'])->name('save.post');
Route::get('/subedit/{id}', [SUBMENUCONTROLLER::class,'edit'])->name('edit');
route::post('/subupdate', [SUBMENUCONTROLLER::class,'updatepost']);
Route::get('/subdelete/{id}', [SUBMENUCONTROLLER::class,'delete'])->name('delete');