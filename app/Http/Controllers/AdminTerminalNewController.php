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


    /**
    * 新しいユーザーを保存
    *
    * @param  Request  $request
    * @return Response
    */

    public function check(TerminalCreateRequest $request)
    {
        $status_id = $request->input('status');
        $status_name = Status::find($status_id)->name;
        $pc_name = $request->input('pc_name');
        $approval_no = $request->input('approval_no');
        $employees_id = $request->input('employee_name');
        $employee_name = Employee::find($employees_id)->name;
        $depositories_id = $request->input('depository');
        $depositories_name = Depository::find($depositories_id)->name;
        $terminal_info_id = $request->input('product_name');
        $product_name = TerminalInformation::find($terminal_info_id)->name;
        $serial_no = $request->input('serial_no');
        $model_name = $request->input('model_name');
        $cpu_id = $request->input('cpu');
        $cpu_name = Cpu::find($cpu_id)->name;
        $memories_id = $request->input('memory');
        $memories_name = Memory::find($memories_id)->name;
        $hdd_id = $request->input('hdd');
        $hdd_name = Hdd::find($hdd_id)->name;
        $os_id = $request->input('os');
        $os_name = Os::find($os_id)->name;
        $office_info_id = $request->input('office_info');
        $office_name = OfficeInformation::find($office_info_id)->name;
        $memo = $request->input('memo');
        $qr_code = $request->input('qr_code');
        // $terminal_management['terminal_management'] = TerminalManagement::find($id);
        return view('terminal_check', compact(['status_name','pc_name','approval_no','employees_name','depositories_name','product_name','serial_no','model_name','cpu_name','memories_name','hdd_name','os_name','office_name','memo','qr_code']));
    }

    public function create(TerminalCreateRequest $request)
    {

        $terminal_management = TerminalManagement::create([
            'status_id' => $status_id,
            'pc_name' => $pc_name,
            'approval_no' => $approval_no,
            'employees_id' => $employees_id,
            'depositories_id' => $depositories_id,
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
        return redirect()->route('terminal_complete', ['id'=>$terminal_management->id]);
    }

    public function complete($id)
    {
        return view('terminal_complete');
    }
}
