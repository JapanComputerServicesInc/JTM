<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Depository;
use App\Employee;

class UserRegisterController extends Controller
{
    //
    public function edit($pc_name){      
        $departments = Department::pluck('name', 'id');
        $depositories = Depository::pluck('name', 'id');
        return view('user_register', compact(['departments','depositories', 'pc_name']));
    }

    public function update(Request $request, $pc_name){
        $employee=$request->input('employee');
        $department=$request->input('department');
        $depository=$request->input('depository');
        $optionsRadios=$request->input('optionsRadios');

        $employee_id=Employee::where('name','=',$employee)->pluck('id');
        $departments=TerminalManagement::where('pc_name','=','$pc_name')->update(['departments'=>$last_name]);
        $employees=TerminalManagement::find($id)->update(['last_name'=>$last_name]);
        $departments=TerminalManagement::find($id)->update(['last_name'=>$last_name]);
        $departments=TerminalManagement::find($id)->update(['last_name'=>$last_name]);
       return view('user_register', compact(['departments','depositories','pc_name']));

    }
}
