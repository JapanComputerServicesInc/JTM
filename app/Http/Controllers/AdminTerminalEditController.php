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
    public function edit($id){
      //処理内容↓
      $terminal_managements = TerminalManagement::find($id);
      $employees = Employee::pluck('name', 'id');
      $departments = Department::pluck('name', 'id');
      $depositories = Depository::pluck('name', 'id');
      $cpus = cpu::pluck('name', 'id');
      $department = Department::pluck('name', 'id');
      $depositories = Depository::pluck('name', 'id');
      $employees = Employee::pluck('name', 'id');
      $hdds = Hdd::pluck('name', 'id');
      $memories = Memory::pluck('name', 'id');
      $office_informations = OfficeInformation::pluck('name', 'id');
      $office_licenses = OfficeLicense::pluck('name', 'id');
      $oss = Os::pluck('name', 'id');
      $status = Status::pluck('name', 'id');
      $terminal_info = TerminalInformation::pluck('name', 'id');
      return view('terminal_edit',compact(['cpus','departments','depositories','employees','hdds','memories','office_informations','office_licenses','oss','status','terminal_info','terminal_managements']));
    
    /*
    $terminal_managements = TerminalManagement::all();
    $cpus = Cpu::pluck('name', 'id');
    $oss = Os::pluck('name', 'id');
    $depositories = Depository::pluck('name', 'id');
    $office_informations = OfficeInformation::pluck('name', 'id');
    $memories = Memory::pluck('name', 'id');
    $hdds = Hdd::pluck('name', 'id');
   

    return view('manager_index',compact(['cpus','oss','depositories','office_informations','memories','hdds','statuses','terminal_managements']));
    }
    
*/
return view('terminal_edit',compact(['cpus','oss','depositories','office_informations','memories','hdds','statuses','terminal_managements']));
    }
    public function update()
    {
//
    }

    public function delete()
    {
//
    }
}
