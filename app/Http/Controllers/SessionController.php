<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function login()
    {
        if (auth()->attempt(\request(['email', 'password'])) == false) {
            return response()->json(['message' => 'почта или пароль не оч'], 422);
        }
        return response()->json(['message' =>  ' success']);
    }

    public function destroy()
    {
        auth()->logout();

        return response()->json('logouted success');
    }

}
