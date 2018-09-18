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
        $statuses = Status::all();
        $terminal_managements = TerminalManagement::all();

        return view('manager_index',compact(['cpus','oss','depositories','office_informations','memories','hdds','statuses','terminal_managements']));
    }

    public function search(Request $request)
    {
        $requestParam = $request->all();

        $cpus = Cpu::all();
        $oss = Os::all();
        $depositories = Depository::pluck('depository', 'id');
        $office_informations = OfficeInformation::all();
        $memories = Memory::all();
        $hdds = Hdd::all();
        $statuses = Status::all();

        $terminal_managements = TerminalManagement::
        where(function ($query) use($requestParam) {
            if (isset($requestParam['depository'])) {
                $query->where('depositories_id', '=', $requestParam['depository']);
            }
            if (isset($requestParam['employee'])) {
                $query->where('employees_id', '=', $requestParam['employee']);
            }
            if (isset($requestParam['os'])) {
                $query->where('os_id', '=', $requestParam['os']);
            }
            if (isset($requestParam['cpu'])) {
                $query->where('cpu_id', '=', $requestParam['cpu']);
            }
            if (isset($requestParam['office_information'])) {
                $query->where('office_info_id', '=', $requestParam['office_information']);
            }
            if (isset($requestParam['memory'])) {
                $query->where('memories_id', '=', $requestParam['memory']);
            }
            if (isset($requestParam['hdd'])) {
                $query->where('hdd_id', '=', $requestParam['hdd']);
            }
            // if (isset($requestParam['hdd'])) {
            //     $query->where('status_id', '=', $requestParam['hdd']);
            // }
        })
        ->get();
        return view('manager_index',compact(['cpus','oss','depositories','office_informations','memories','hdds','statuses','terminal_managements']));
    }
}
