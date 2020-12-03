<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Apps\TodoController;
use App\Http\Controllers\ProfileController;

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
Route::get('/test', function () {
    return view('user.account-setting');
});
Auth::routes();
Route::resource('todo', 'Apps\TodoController');
Route::resource('profile', 'ProfileController');

Route::get('/1', 'ProfileController@index');
// Route::get(['/customer', 'middleware' => 'admins'], function () {
//     return view('management.customer');
// });
Route::get('/home', 'HomeController@index')->name('home');
