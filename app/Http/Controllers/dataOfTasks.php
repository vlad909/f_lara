<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Task;

class dataOfTasks extends Controller
{
    public function info()
    {
        return response()->json(Task::orderBy('created_at', 'asc')->get());
    }

    public function add(Request $request)
    {
        return response()->json(Task::query()->create($request->all()));
    }

    public function change(Task $task, Request $request)
    {
        return response()->json($task->update($request->all()));
    }
}
