<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpu;
use App\Os;
use App\Depository;
use App\OfficeInformation;
use App\Memory;
use App\Hdd;
use App\Status;
use App\TerminalManagement;

class AdminTerminalIndexController extends Controller
{

    public function index()
    {
        $cpus = Cpu::all();
        $oss = Os::all();
        $depositories = Depository::all();
        $office_informations = OfficeInformation::all();
        $memories = Memory::all();
        $hdds = Hdd::all();
        $status = Status::all();
        $terminal_managements = TerminalManagement::all();

        return view('manager_index',compact(['cpus','oss','depositories','office_informations','memories','hdds','status','terminal_managements']));
    }

    public function search(Request $request)
    {
        $depository = $request->input('depository');
        $employee = $request->input('employee');
        $status1 = $request->input('optionsRadios1');
        $status2 = $request->input('optionsRadios2');
        $status3 = $request->input('optionsRadios3');
        $os = $request->input('os');
        $cpu = $request->input('cpu');
        $office_informations = $request->input('office_information');
        $memory = $request->input('memory');
        $hdd = $request->input('hdd');

        $cpus = Cpu::all();
        $oss = Os::all();
        $depositories = Depository::all();
        $office_informations = OfficeInformation::all();
        $memories = Memory::all();
        $hdds = Hdd::all();
        $status = Status::all();

        $terminal_managements = TerminalManagement::
        where('depositories_id', '=', $depository)
            ->orwhere('employees_id', '=', $employee)
            ->orwhere('os_id', '=', $os)
            ->orwhere('cpu_id', '=', $cpu)
            ->orwhere('office_info_id', '=', $office_informations)
            ->orwhere('memories_id', '=', $memory)
            ->orwhere('hdd_id', '=', $hdd)
            ->orwhere('status_id', '=', $status1)
            ->orwhere('status_id', '=', $status2)
            ->orwhere('status_id', '=', $status3)
        ->get();
        return view('manager_index',compact(['cpus','oss','depositories','office_informations','memories','hdds','status','terminal_managements']));
    }
}
