<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myaccount()
    {
        return view('user.index', ['user' => Auth::user(), 'posts'=> Auth::user()->posts()->get()]);
    }
}
