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
use App\OfficeInformation;
use App\TerminalManagement;

class AdminTerminalNewController extends Controller
{
    //
    public function new()
    {
        $employees = Employee::all();
        $depositories = Depository::all();
        $terminal_info= TerminalInformation::all();
        $memories = Memory::all();
        $cpu = Cpu::all();
        $hdd = Hdd::all();
        $os = Os::all();
        $office_info = OfficeInformation::all();

        return view('terminal_new', compact(['employees','depositories','terminal_info','memories','cpu','hdd','os','office_info']));
    }


    /**
    * 新しいユーザーを保存
    *
    * @param  Request  $request
    * @return Response
    */
    public function create(TerminalCreateRequest $request)
    {
        $status_id = $request->input('status');
        $pc_name = $request->input('pc_name');
        $approval_no = $request->input('approval_no');
        $employees_id = $request->input('employee_name');
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

        return redirect()->route('terminal_check', ['id'=>$terminal_management->id]);
    }

    public function check(TerminalCreateRequest $request)
    {
        $data = $request->all();
        return view('terminal_check')->with($data);
    }
}
