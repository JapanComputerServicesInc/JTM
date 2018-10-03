<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerminalCreateRequest;
use App\Cpu;
use App\Department;
use App\Depository;
use App\Employee;
use App\Hdd;
use App\Memory;
use App\OfficeInformation;
use App\OfficeLicense;
use App\Os;
use App\Status;
use App\TerminalInformation;
use App\TerminalManagement;

class AdminTerminalEditController extends Controller
{
    public function edit($id){
      //処理内容↓
      $terminal_managements = TerminalManagement::find($id);
      $employees = Employee::all();
      foreach ($employees as $employee) {
         $employee->name = $employee->name.'('.$employee->department->name.')';
      }
      $employees = $employees->pluck('name','id');
      $departments = Department::pluck('name', 'id');
      $depositories = Depository::pluck('name', 'id');
      $cpus = cpu::pluck('name', 'id');
      $hdds = Hdd::pluck('name', 'id');
      $memories = Memory::pluck('name', 'id');
      $office_informations = OfficeInformation::pluck('name', 'id');
      $office_licenses = OfficeLicense::pluck('name', 'id');
      $oss = Os::pluck('name', 'id');
      $status = Status::pluck('name', 'id');
      $terminal_informations = TerminalInformation::all();
      foreach ($terminal_informations as $terminal_information) {
          $terminal_information->name = $terminal_information->name.'('.$terminal_information->producer.')';
      }
      $terminal_informations = $terminal_informations->pluck('name','id');
      return view('terminal_edit',compact(['cpus','departments','depositories','employees','hdds','memories','office_informations','office_licenses','oss','status','terminal_informations','terminal_managements']));


    }
    public function update(TerminalCreateRequest $request,$id){

     $terminal_managements = TerminalManagement::find($id);
     $status = $request->input('status');
     // dd($status);
     $pc_name = $request->input('pc_name');
     $approval_no = $request->input('approval_no');
     $employee = $request->input('employee');
     $depository = $request->input('depository');
     $product_name = $request->input('product_name');
     $serial_no = $request->input('serial_no');
     $model_name = $request->input('model_name');
     $cpu = $request->input('cpu');
     $memory = $request->input('memory');
     $hdd = $request->input('hdd');
     $os = $request->input('os');
     $office_information = $request->input('office_information');
     $memo = $request->input('memo');
     $qr_code = route('user_register_edit',['pc_name' =>$pc_name]);

     $terminal_managements->status_id = $status;
     $terminal_managements->pc_name = $pc_name;
     $terminal_managements->approval_no = $approval_no;
     if($status ==1){
              $terminal_managements->employees_id = $employee;
      }else{
          $terminal_managements->employees_id = null;
      }
     $terminal_managements->depositories_id = $depository;
     $terminal_managements->terminal_informations_id = $product_name;
     $terminal_managements->serial_no = $serial_no;
     $terminal_managements->model_name = $model_name;
     $terminal_managements->cpu_id = $cpu;
     $terminal_managements->memories_id = $memory;
     $terminal_managements->hdd_id = $hdd;
     $terminal_managements->os_id = $os;
     $terminal_managements->office_informations_id = $office_information;
     $terminal_managements->memo = $memo;
     $terminal_managements->qr_code = $qr_code;
     $terminal_managements->update();

     \Alert::success('ホスト名を変更した場合はQRコードを発行してください。', '更新が完了しました。');
     return redirect()->route('terminal_edit', ['id' => $id]);
    }


    public function destroy(Request $request,$id)
    {
    $terminal_managements = TerminalManagement::find($id);
    $terminal_managements->delete();

    \Alert::success('', '削除が完了しました。');
    return redirect()->route('terminal_index');
    }
}
