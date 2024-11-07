<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUser()
    {
        return view('123');
    }

    public function getUser()
    {
        $users = User::all();
        //return response(["users" => $users->name], 200);
        return view("users.123", compact('users'));
    }

    public function one($id)
    {
        $user = User::where('id', '=', $id)->first();
        //return response()->json($user);
        return view("users.one", compact('user'));
    }
}
