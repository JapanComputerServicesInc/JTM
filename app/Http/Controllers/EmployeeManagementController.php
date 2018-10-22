<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Http\Requests\EmployeeDestroyRequest;
use App\Employee;
use App\Department;

class EmployeeManagementController extends Controller
{

    public function index()
    {
    $employees = Employee::paginate(20);
    return view('employee_index',compact(['employees']));
    }


    public function new()
    {
    $departments = Department::pluck('name','id');
    return view('employee_new',compact(['departments']));
    }


    public function create(EmployeeUpdateRequest $request)
    {
     $employee= $request->input('employee');
     $department= $request->input('department');
     Employee::create([
        'departments_id' => $department,
        'name' => $employee,
     ]);

    \Alert::success('','登録が完了しました。');

    return redirect()->route('employee_index');
    }


    public function edit($id)
    {
      $employees = Employee::find($id);
      $departments = Department::pluck('name','id');
      return view('employee_edit',compact(['employees','departments']));
    }


    public function update(EmployeeUpdateRequest $request,$id)
    {
     $employees = Employee::find($id);
     $employee = $request->input('employee');
     $department = $request->input('department');
     $employees->name = $employee;
     $employees->departments_id = $department;

     $employees->update();

     \Alert::success('', '更新が完了しました。');
     return redirect()->route('employee_edit', ['id' => $id]);
    }


    public function destroy(EmployeeDestroyRequest $request,$id)
    {
    $employees = Employee::find($id);
    $employees->delete();

    \Alert::success('', '削除が完了しました。');
    return redirect()->route('employee_index');
    }

}
