<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerminalCreateRequest;
use App\Employee;
use App\Depository;
use App\TerminalInformation;
use App\Memory;
use App\Cpu;
use App\Hdd;
use App\Os;
use App\Status;
use App\OfficeInformation;
use App\TerminalManagement;
use App\Alert;

class AdminTerminalNewController extends Controller
{
    //
    public function new()
    {
        $employees = Employee::all();
        foreach ($employees as $employee) {
            $employee->name = $employee->name.'('.$employee->department->name.')';
        }
        // $employees->flatMap(function ($employee) {
        //     $employee->name = $employee->name.'('.$employee->department->name.')';
        //     return $employee;
        // });
        $employees = $employees->pluck('name','id');
        $terminal_informations= TerminalInformation::all();
        foreach ($terminal_informations as $terminal_information) {
            $terminal_information->name = $terminal_information->name.'('.$terminal_information->producer.')';
        }
        $terminal_informations = $terminal_informations->pluck('name','id');
        $depositories = Depository::pluck('name','id');
        $memories = Memory::pluck('name','id');
        $cpu = Cpu::pluck('name','id');
        $hdd = Hdd::pluck('name','id');
        $os = Os::pluck('name','id');
        $office_info = OfficeInformation::pluck('name','id');

        return view('terminal_new', compact(['employees','depositories','terminal_informations','memories','cpu','hdd','os','office_info']));
    }


    public function create(TerminalCreateRequest $request)
    {

         $status_id = $request->input('status');
         $pc_name = $request->input('pc_name');
         $approval_no = $request->input('approval_no');
         $employee = $request->input('employee_name');
         $depositories_id = $request->input('depository');
         $terminal_info_id = $request->input('product_name');
         $serial_no = $request->input('serial_no');
         $model_name = $request->input('model_name');
         $cpu_id = $request->input('cpu');
         $memories_id = $request->input('memory');
         $hdd_id = $request->input('hdd');
         $os_id = $request->input('os');
         $office_info_id = $request->input('office_info');
         $memo = $request->input('memo');
         $qr_code = $request->input('qr_code');

        $terminal_management = TerminalManagement::create([

            'status_id' => $status_id,
            'pc_name' => $pc_name,
            'approval_no' => $approval_no,
            'employees_id' => $employee,
            'depositories_id' => $depositories_id,
            'terminal_informations_id' => $terminal_info_id,
            'serial_no' => $serial_no,
            'model_name' => $model_name,
            'cpu_id' => $cpu_id,
            'memories_id' => $memories_id,
            'hdd_id' => $hdd_id,
            'os_id' => $os_id,
            'office_informations_id' => $office_info_id,
            'memo' => $memo,
            'qr_code' => $qr_code,
        ]);

        \Alert::success('登録が完了しました', 'Optional Title');

        return redirect()->route('terminal_index');
    }

}
