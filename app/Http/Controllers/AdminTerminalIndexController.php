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

class AdminTerminalIndexController extends Controller
{

    public function index()
    {
        $cpus = Cpu::all();
        $oss = Os::all();
        $depositories = Depository::all();
        $office_infomations = OfficeInfomation::all();
        $memories = Memory::all();
        $hdds = Hdd::all();
        $status = Status::all();
        $termianl_managements = TerminalManagement::all();

        return view('manager_index',compact(['cpus','oss','depositories','office_infomations','memories','hdds','status','terminal_managements']));
    }
}
