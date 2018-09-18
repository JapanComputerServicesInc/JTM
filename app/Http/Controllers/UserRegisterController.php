<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Depositories;

class UserRegisterController extends Controller
{
    //
    public function edit($id){      
        $departments = Department::all();
        return view('user_register', compact(['departments']));
    }
}
