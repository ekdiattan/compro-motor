<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewlogin()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('home/dashboard', ['title' => 'Dashboard']);
    }   
}
