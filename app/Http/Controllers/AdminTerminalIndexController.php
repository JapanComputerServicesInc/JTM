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
use App\Employee;
use App\TerminalManagement;

class AdminTerminalIndexController extends Controller
{

    public function index()
    {
        $cpus = Cpu::pluck('name', 'id');
        $oss = Os::pluck('name', 'id');
        $depositories = Depository::pluck('name', 'id');
        $office_informations = OfficeInformation::pluck('name', 'id');
        $memories = Memory::pluck('name', 'id');
        $hdds = Hdd::pluck('name', 'id');
        $terminal_managements = TerminalManagement::paginate(20);

        return view('manager_index',compact(['cpus','oss','depositories','office_informations','memories','hdds','statuses','terminal_managements']));
    }

    public function search(Request $request)
    {
        $requestParam = $request->all();
        // \Debugbar::info(old());
        $cpus = Cpu::pluck('name', 'id');
        $oss = Os::pluck('name', 'id');
        $depositories = Depository::pluck('name', 'id');
        $office_informations = OfficeInformation::pluck('name', 'id');
        $memories = Memory::pluck('name', 'id');
        $hdds = Hdd::pluck('name', 'id');

        $terminal_managements = TerminalManagement::
        where(function ($query) use($requestParam) {
            if (isset($requestParam['depository'])) {
                $query->where('depositories_id', '=', $requestParam['depository']);
            }
            if (isset($requestParam['employee'])) {
                // $employee = Employee::select('id')->where('name','like',"%{$requestParam['employee']}%")->get();
                // dd(Employee::where('name','like',"%{$requestParam['employee']}%"));
                $employee = Employee::where('name','like',"%{$requestParam['employee']}%")->pluck('id');
                $query->whereIn('employees_id', $employee);
            }
            if (isset($requestParam['os'])) {
                $query->where('os_id', '=', $requestParam['os']);
            }
            if (isset($requestParam['cpu'])) {
                $query->where('cpu_id', '=', $requestParam['cpu']);
            }
            if (isset($requestParam['office_information'])) {
                $query->where('office_informations_id', '=', $requestParam['office_information']);
            }
            if (isset($requestParam['memory'])) {
                $query->where('memories_id', '=', $requestParam['memory']);
            }
            if (isset($requestParam['hdd'])) {
                $query->where('hdd_id', '=', $requestParam['hdd']);
            }
            if (isset($requestParam['optionsRadios'])) {
                $query->where('status_id', '=', $requestParam['optionsRadios']);
            }
        })
        ->paginate(20);
        return view('manager_index',compact(['cpus','oss','depositories','office_informations','memories','hdds','terminal_managements']));
    }
}
