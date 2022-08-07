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
Auth::routes();

Route::get('/clear', function(){
    ///Artisan::call('artisan key:generate');
   // Artisan::call('cache:clear');
    //Artisan::call('config:cache');
    //Artisan::call('view:clear');
    Artisan::call('storage:link');
    
});




Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/tasks_list','Tasks\TasksController@tasks_list')->name('tasks_list');
Route::get('/create_task_add','Tasks\TasksController@create_task_add')->name('create_task_add');
Route::post('/task_store','Tasks\TasksController@task_store')->name('task_store');

Route::get('/task_completed/{id}','Tasks\TasksController@task_completed')->name('task_completed');


