<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();


        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id)
    {
        $task = Task::find($id);


        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function orshow(Task $task) // Task::find($task);
    {

        return view('tasks.show', [
            'task' => $task
        ]);
    }

}
