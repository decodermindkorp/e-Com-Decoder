<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $usr = User::where(['email' => $req->email])->first();
        if (!$usr || !Hash::check($req->password, $usr->password)) {
            return "Username and Password not matched";
        } else {
            $req->session()->put('user', $usr);
            return redirect("/");
        }
    }
}
