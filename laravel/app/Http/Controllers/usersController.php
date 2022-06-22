<?php

namespace App\Http\Controllers;
use App\Htttp\Controllers\users;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(){
        $users = users::get();
        return view('users.list', ['users' => $users]);
    }
}
