<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Apps\TodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Authenticate;
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
Route::get('/notes', function () {
    return view('apps.notes');
});
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::resource('todo', 'Apps\TodoController');
    Route::resource('profile', 'ProfileController');
    Route::resource('projects', 'Apps\ProjectController');
    Route::resource('accounts', 'Admin\UserController');
    Route::resource('config-page', 'Admin\ConfigPageController');
    
Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/mission', 'Apps\ToDoCompletionController@index');
