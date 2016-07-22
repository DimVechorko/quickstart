<?php
namespace App\Http\Controllers;

use App\Task;
use App\Http\Controllers\Controller;

class DeleteTaskController extends Controller
{
    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/');
    }
}