<?php
namespace App\Http\Controllers;

use App\Task;
use App\Http\Controllers\Controller;

class GetTasksController extends Controller
{
    public function getTasks()
    {
        return view('tasks', ['tasks' => Task::orderBy('created_at', 'asc')->get()]);
    }
}