<?php

use App\Task;
use Illuminate\Http\Request;
use Dotenv\Validator;

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
Route::get('/tasks', function () {
    $tasks = Task::orderBy('created_at', 'asc') -> get();
    return view('list', [
        'tasks' => $tasks
    ]);
});
Route::post('/task', function () {
//    $validator = Validator::make($request->all(),
//        ['name' => 'requiered|max:255']);
//    if ($validator->fails()) {
//        return redirect('/')
//            ->withInput()
//            ->withErrors($validator);
//    }
    dd(request()->all());
//    $task = new Task;
//    $task->name = $request->name;
//    $task->save();
//    return redirect('/');

});
Route::delete('/task/{id}', function ($id) {
    //
});

Route::get('/home', 'HomeController@index')->name('home');
