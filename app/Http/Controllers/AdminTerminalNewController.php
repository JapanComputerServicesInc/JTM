<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerminalCreateRequest;
use App\Employee;
use App\Depository;
use App\TerminalInformation;
use App\Memory;
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
        $hdd = Hdd::all();
        $os = Os::all();
        $office_info = OfficeInformation::all();

        return view('terminal_new', compact(['employees','depositories','terminal_info','memories','hdd','os','office_info']));

    }


    /**
    * 新しいユーザーを保存
    *
    * @param  Request  $request
    * @return Response
    */
    public function create(TerminalCreateRequest $request)
    {
        $status = $request->input('status');
        $pc_name = $request->input('pc_name');
        $approval_no = $request->input('approval_no');
        $employee_name = $request->input('employee_name');
        $depository = $request->input('depository');
        $producer = $request->input('producer');
        $product_name = $request->input('product_name');
        $serial_no = $request->input('serial_no');
        $model_name = $request->input('model_name');
        $cpu = $request->input('cpu');
        $memory = $request->input('memory');
        $hdd = $request->input('hdd');
        $os = $request->input('os');
        $office_info = $request->input('office_info');
        $memo = $request->input('memo');
        $qr_code = $request->input('qr_code');

        $terminal_management = TerminalManagement::create([
            'status_id' => $status,
            'pc_name' => $pc_name,
            'approval_no' => $approval_no,
            'employees_id' => $employee_name,


                'department' => $department,

            'depositories_id' => $depository,

            'producer' => $producer,
            'product_name' => $product_name,

            'serial_no' => $serial_no,
            'model_name' => $model_name,
            'cpu_id' => $cpu,
            'memories_id' => $memory,
            'hdd_id' => $hdd,
            'os_id' => $os,
            'office_info_id' => $office_info,
            'memo' => $memo,
            'qr_code' => $qr_code,
        ]);

     return redirect()->route('terminal_create', ['id'=>$terminal_management->id]);

    }
}
