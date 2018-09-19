<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Task;

class dataOfTasks extends Controller
{
    public function info()
    {
        return response()->json(Task::orderBy('created_at', 'asc')->paginate(5));
    }

    public function storeID($id)
    {
        return response()->json(Task::findOrFail($id));
    }

    public function deleteAllStoresById($id)
    {
        return (response()->json(Task::where('id_author', 111)->delete()));
    }

    public function add(Request $request)
    {
        return response()->json(Task::query()->create($request->all()));
    }

    public function change(Task $task, Request $request)
    {
        return response()->json($task->update($request->all()));
    }

    public function delete(Task $task)
    {
        return response()->json($task->delete());
    }


    public function findq()
    {
        $tasks = Task::where('id_author', $_GET['id_author'])->get();
//        $fin = (object) array("tasks" => $tasks, 'count' => $tasks->count());
//        dd(Task::find((integer)$_GET['id']));
        return response()->json((object)array("tasks" => $tasks, 'count' => $tasks->count()));
//        $filter = Task::filter(function ($value){
//            return $value.id_author == $id;
//        });
//        return response()->json($filter);
    }
}
