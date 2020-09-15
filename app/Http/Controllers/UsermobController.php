<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\Usermob;
use App\Models\User;
class UsermobController extends Controller
{
  // $users = \App\Usermob::all();
 public function index(){

        $usermob = user::all();

        return view('usermob.index',compact('usermob'));
    }

    public function create(){
        return view('usermob.create');
    }

    public function storeDevice(){

        $usermob = new Usermob();

        $usermob->name = request('name');
        $usermob->description = request('email');
        $usermob->name = request('phone');
     

        $usermob->save();

        return redirect('/usermob');

    }

}
