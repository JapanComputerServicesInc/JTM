<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\TerminalCreateRequest;
use App\Cpu;

class CpuManagementController extends Controller
{

    public function index()
    {
    $cpus = Cpu::paginate(20);

    return view('cpu_index',compact(['cpus']));
    }


    public function new()
    {
    return view('cpu_new');
    }


    public function create(Request $request)
    {
     $cpu= $request->input('cpu');
     Cpu::create([
        'name' => $cpu,
     ]);

    \Alert::success('','登録が完了しました。');

    return redirect()->route('cpu_index');
    }


    public function edit($id)
    {
      $cpus = Cpu::find($id);

      return view('cpu_edit',compact(['cpus']));
    }


    public function update(Request $request,$id)
    {
     $cpus = Cpu::find($id);
     $cpu = $request->input('cpu');
     $cpus->name = $cpu;
     $cpus->update();

     \Alert::success('', '更新が完了しました。');
     return redirect()->route('cpu_edit', ['id' => $id]);
    }


    public function destroy($id)
    {
    $cpus = Cpu::find($id);
    $cpus->delete();

    \Alert::success('', '削除が完了しました。');
    return redirect()->route('cpu_index');
    }

}
