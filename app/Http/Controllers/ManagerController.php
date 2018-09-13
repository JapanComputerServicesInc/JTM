<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpu;
use App\Os;
use App\Depository;
use App\OfficeInfomation;
use App\Memory;
use App\Hdd;
use App\Status;
use App\TerminalManagement;

class ManagerController extends Controller
{

    public function index()
    {
        $cpus = Cpu::all();
        $os = Os::all();
        $depositories = Depository::all();
        $office_info = OfficeInfomation::all();
        $memories = Memory::all();
        $hdds = Hdd::all();
        $status = Status::all();
        $termianl_managements = TerminalManagement::all();

        return view('manager_index',compact(['cpus','os','depositories','office_info','memories','hdds','status','terminal_managements']));
    }
}
