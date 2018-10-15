<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DepartmentUpdateRequest;
use App\Department;

class DepartmentManagementController extends Controller
{

    public function index()
    {
    $departments = Department::paginate(20);

    return view('department_index',compact(['departments']));
    }


    public function new()
    {
    return view('department_new');
    }


    public function create(DepartmentUpdateRequest $request)
    {
     $department= $request->input('department');
     Department::create([
        'name' => $department,
     ]);

    \Alert::success('','登録が完了しました。');

    return redirect()->route('department_index');
    }


    public function edit($id)
    {
      $departments = Department::find($id);

      return view('department_edit',compact(['departments']));
    }


    public function update(DepartmentUpdateRequest $request,$id)
    {
     $departments = Department::find($id);
     $department = $request->input('department');
     $departments->name = $department;
     $departments->update();

     \Alert::success('', '更新が完了しました。');
     return redirect()->route('department_edit', ['id' => $id]);
    }


    public function destroy($id)
    {
    $departments = Department::find($id);
    $departments->delete();

    \Alert::success('', '削除が完了しました。');
    return redirect()->route('department_index');
    }

}
