<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use App\Department;
use App\Depository;
use App\Employee;
use App\TerminalManagement;

class UserRegisterController extends Controller
{
    //
    public function edit($pc_name)
    {
        $terminal_management = TerminalManagement::where('pc_name',$pc_name)->first();
        $departments = Department::pluck('name', 'id');
        $depositories = Depository::pluck('name', 'id');
        $employees = Employee::all();
        foreach ($employees as $employee) {
            $employee->name = $employee->name.'('.$employee->department->name.')';
        }
        $employees = $employees->pluck('name','id');
        return view('user_register', compact(['departments', 'depositories', 'terminal_management','employees']));
    }

    public function update(UserUpdateRequest $request, $pc_name)
    {
        $employee_id=$request->input('employee');
        $depositories_id=$request->input('depository');
        $status_id=$request->input('status');
        $terminal_management = TerminalManagement::where('pc_name',$pc_name)->first();
        if($status_id ==1){
                 $terminal_management->employees_id = $employee_id;
         }else{
             $terminal_management->employees_id = null;
         }
        $terminal_management->depositories_id = $depositories_id;
        $terminal_management->status_id = $status_id;
        $terminal_management->update();
        \Alert::success('', '登録が完了しました。');
       return redirect()->route('terminal_index',['pc_name' => $terminal_management->pc_name]);

    }
}
