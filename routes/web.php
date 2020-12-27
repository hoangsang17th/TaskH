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
// Route::get('/tests', function () {
//     return view('management.add_project');
// });
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    // Controller Apps
    Route::resource('projects', 'Apps\ProjectController'); // Dự án đang thực hiện
    Route::resource('todo', 'Apps\TodoController'); // Todo list
    Route::get('mission', 'Apps\ToDoCompletionController@index'); // Todo list đã hoàn thành
    Route::resource('notes', 'Apps\NotesController'); // Ghi chú
    Route::resource('chat', 'Apps\ChatController'); // Trò chuyện
    Route::resource('tasks', 'Apps\TaskController'); // Nhiệm vụ của dự án
    

    // Controller Admin
    Route::resource('accounts', 'Admin\UserController'); // Thông tin nhân viên
    Route::resource('config-page', 'Admin\ConfigPageController'); // Cài đặt trang

    // Controller Manager
    Route::resource('customer', 'Manager\CustomerController'); // Thông tin nhân viên
    Route::resource('all_project', 'Manager\ProjectController'); // Nhiệm vụ của dự án
    Route::resource('skill', 'Manager\SkillController'); // Nhiệm vụ của dự án


    // Controller Hệ thống
    Route::resource('profile', 'ProfileController');
    Route::get('/home', 'HomeController@index')->name('home');
    

    
    
    
    

});

