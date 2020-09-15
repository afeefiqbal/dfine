<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserViewController extends Controller
{
 $users = \App\UserView::all();

        return view('register.index',compact('users'));
}
