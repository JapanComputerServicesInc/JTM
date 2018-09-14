<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpu;
use App\Department;
use App\Depository;
use App\Employee;
use App\Hdd;
use App\Memory;
use App\OfficeInformation;
use App\OfficeLicense;
use App\Os;
use App\Status;
use App\TerminalInformation;
use App\TerminalManagement;

class AdminTerminalEditController extends Controller
{
    public function Edit()
    {//処理内容↓
      $cpus = Cpu::all();
      $department = department::all();
      $depositories = Depository::all();
      $employees = Employee::all();
      $hdds = Hdd::all();
      $memories = Memory::all();
      $office_info = OfficeInformation::all();
      $office_licenses = OfficeLicense::all();
      $os = Os::all();
      $status = Status::all();
      $terminal_info = TerminalInformation::all();
      $terminal_managements = TerminalManagement::all();
      return view('terminal_edit',compact(['cpus','department','depositories','employees','hdds','memories','office_info','office_licenses','os','status','terminal_info','terminal_managements']));
    }

    public function update($id)
    {
//
    }

    public function delete($id)
    {
//
    }
}
