<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Task;
//use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Вывести список всех задач
     */
    Route::get('/', 'GetTasksController@getTasks');

    /**
     * Добавить новую задачу
     */
    Route::post('/task', 'AddTaskController@addTask');

    /**
     * Удалить существующую задачу
     */
    //Route::delete('/task/{id}', function ($id) {
    //    Task::findOrFail($id)->delete();
//
    //    return redirect('/');
    //});
    Route::delete('/task/{id}', 'DeleteTaskController@deleteTask');
});