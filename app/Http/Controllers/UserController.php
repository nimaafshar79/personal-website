<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{

    public function userList(Request $request)
    {
        $users = User::all();
        return view("list.user" , compact("users"));
    }
}
