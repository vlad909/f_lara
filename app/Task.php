<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'id_author'];
//    protected $guarded = [];

//    public static function changeStuff($id)
//    {
//        $task = Task::find($id);
//        $task->name = 'puser';
//
//        return $task->save();
//    }
}
