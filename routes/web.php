<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createBlogCont;
use App\Http\Controllers\createUserContr;

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
// Route :: resource('user/create',createUserContr::class);

Route :: get('user/create',[createUserContr :: class , 'create']);
Route :: post('user/store',[createUserContr :: class , 'store']);
Route :: get('user/index',[createUserContr :: class , 'index']);
Route :: get('user/delete/{id}' ,[createUserContr :: class ,'remove']);

Route :: get('blog/create',[createBlogCont :: class , 'create']);
Route :: post('blog/store',[createBlogCont :: class , 'store']);
Route :: get('blog/index',[createBlogCont :: class , 'index']);

// Route :: get('blog/delete/{id}' ,[createUserContr :: class ,'remove']);

Route :: get('blog/edit/{id}',[createBlogCont :: class , 'edit']);
Route :: put('blog/update/{id}',[createBlogCont :: class , 'update']);
Route :: get('blog/delete/{id}' ,[createBlogCont :: class ,'remove']);


