<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Depository;
use App\Employee;
use App\TerminalManagement;

class UserRegisterController extends Controller
{
    //
    public function edit($pc_name){      
        $departments = Department::pluck('name', 'id');
        $depositories = Depository::pluck('name', 'id');
        return view('user_register', compact(['departments','depositories', 'pc_name']));
    }

    public function update(Request $request, $pc_name){
        $employee_id=$request->input('employee_id');        
        $depositories_id=$request->input('depositories_id');
        $status_id=$request->input('optionsRadios');

        TerminalManagement::update(['employee_id'=>$employee_id]);
        TerminalManagement::update(['depositories_id'=>$depositories_id]);
        TerminalManagement::update(['status_id'=>$status_id]);
       return view('user_register');

    }
}
