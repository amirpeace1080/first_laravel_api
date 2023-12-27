<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function show($email)
    {
        $users = User::where('email', $email)->first();
        return $users;
    }

    public function destroy($email)
    {
        $user = User::where('email', $email)->first();
        $user->delete();
        return json_encode(['message'=>'user Remove Succfully']);
    }
}
