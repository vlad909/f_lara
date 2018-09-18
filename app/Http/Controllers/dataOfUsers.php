<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class dataOfUsers extends Controller
{

    //
    public function info()
    {
        return response()->json(User::orderBy('id', 'asc')->get());
    }

    public function add(Request $request)
    {

        return response()->json(User::query()->create($request->all()));
    }

    public function store(){
        $this->validate(\request(), [
           'f_name' => 'required',
           'l_name' => 'required',
           'email' => 'required|email',
           'password' => 'required'
        ]);
        $user = User::create(\request(['f_name', 'l_name', 'email', 'password']));
        auth()->login($user);
        return response()->json($user);
    }
}
