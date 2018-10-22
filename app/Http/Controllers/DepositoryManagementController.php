<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DepositoryUpdateRequest;
use App\Http\Requests\DepositoryDestroyRequest;
use App\Depository;

class DepositoryManagementController extends Controller
{

    public function index()
    {
    $depositories = Depository::paginate(20);

    return view('depository_index',compact(['depositories']));
    }


    public function new()
    {
    return view('depository_new');
    }


    public function create(DepositoryUpdateRequest $request)
    {
     $depository= $request->input('depository_name');
     Depository::create([
        'name' => $depository,
     ]);

    \Alert::success('','登録が完了しました。');

    return redirect()->route('depository_index');
    }


    public function edit($id)
    {
      $depositories = Depository::find($id);

      return view('depository_edit',compact(['depositories']));
    }


    public function update(DepositoryUpdateRequest $request,$id)
    {
     $depositories = Depository::find($id);
     $depository = $request->input('depository_name');
     $depositories->name = $depository;
     $depositories->update();

     \Alert::success('', '更新が完了しました。');
     return redirect()->route('depository_edit', ['id' => $id]);
    }


    public function destroy(DepositoryDestroyRequest $request,$id)
    {
    $depositories = Depository::find($id);
    $depositories->delete();

    \Alert::success('', '削除が完了しました。');
    return redirect()->route('depository_index');
    }

}
