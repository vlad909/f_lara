<?php

use Illuminate\Http\Request;
use  \App\Task;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/tasks', 'dataOfTasks@info');
Route::post('/task', 'dataOfTasks@add'
//    function (Request $request) {
//    $validator = Validator::make($request->all(),
//        ['name' => 'requiered|max:255']);
//    if ($validator->fails()) {
//        return redirect('/')
//            ->withInput()
//            ->withErrors($validator);
//    }
//    dd(request()->all());
//    $task = new Task;
//    $task->name = $request->name;
//    $task->save();

//    return response()->json(Task::query()->create($request->all()));}
);
Route::delete('/task/{task}', function (Task $task) {
    return response()->json($task->delete());
});
Route::put('/task/{task}', 'dataOfTasks@change'
//    function (Task $task, Request $request){
//    $name = $request->get();
//    return response()->json($task->update($request->all()));}}
);
//Route::delete('/task/{id}', function ($id) {
//    return response()->json(Task::findOrFail($id)->delete());
//});
//Route::put('/task/{id}', function ($id, Request $request){
////    $name = $request->get();
//    return response()->json(Task::where('id', $id)->update($request->all()));
//});
