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

Route::get('hello', function () {
    return 'Hello world';
});
//Admin
Route::group(['prefix'=>'admin'],function()
{
//Home
    Route::get('/',[\App\Http\Controllers\Admin\IndexController::class,'index'])->name('admin.index');
    //tasks
    Route::resource('tasks',\App\Http\Controllers\Admin\TasksController::class);
});
