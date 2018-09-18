<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
