<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\TerminalCreateRequest;
use App\Employee;
use App\Depository;
use App\TerminalInformation;
use App\Memory;
use App\Hdd;
use App\Os;
use App\OfficeInformation;

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
        $pc_name = $request->input('pc_name');
        $approval_no = $request->input('approval_no');
        $name = $request->input('employee_name');
        $department = $request->input('department');
        $depository = $request->input('depository');
        $producer = $request->input('producer');
        $product_name = $request->input('product_name');
        $serial_no = $request->input('serial_no');
        $cpu = $request->input('cpu');
        $memory = $request->input('memory');
        $hdd = $request->input('hdd');
        $os = $request->input('os');
        $office_info = $request->input('office_info');
        $memo = $request->input('memo');
        $qr_code = $request->input('qr_code');




    }
}
