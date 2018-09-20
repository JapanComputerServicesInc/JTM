<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Depository;

class UserRegisterController extends Controller
{
    //
    public function edit(){      
        $departments = Department::pluck('name', 'id');
        $depositories = Depository::pluck('name', 'id');
        return view('user_register', compact(['departments','depositories']));
    }
}
