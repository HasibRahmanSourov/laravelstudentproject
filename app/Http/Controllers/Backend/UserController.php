<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function view(){
        // dd('ok');
        $data['alldata'] = User::all();
        return view('backend.user.view-user',$data);
    }
}
