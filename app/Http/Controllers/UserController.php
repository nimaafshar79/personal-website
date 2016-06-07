<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userList(Request $request)
    {
        $users = User::all();
        return view("list.user", compact("users"));
    }

    public function profile(Request $request)
    {
        $user = Auth::user();
        return view("profile", compact($user));
    }

    public function profileSubmit(Request $request)
    {
        $information = $request->all();
        if (array_key_exists("name", $information)) {
            //name set
            $this->validate($request, [
                "name" => "required|max:255"
            ]);
            $user = Auth::user();
            $user->name = $request->name;
            $user->save();
            return redirect("profile")->with("notification", "نام تغییر کرد");
        } elseif (array_key_exists("password", $information)) {
            //password set
            $this->validate($request, [
                "password" => "required|max:255|min:6"
            ]);
            $user = Auth::user();
            $user->changePassword($request->password);
            $user->save();
            return redirect("profile")->with("notification","رمز عبور تغییر کرد");
        }
        return redirect("profile");
    }

    public function delete(Request $request)
    {
        Auth::user()->delete();
        return redirect('/');
    }
}
