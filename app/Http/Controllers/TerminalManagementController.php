<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TerminalInfoUpdateRequest;
use App\TerminalInformation;

class TerminalManagementController extends Controller
{

    public function index()
    {
    $terminal_informations = TerminalInformation::paginate(20);

    return view('terminal_info_index',compact(['terminal_informations']));
    }


    public function new()
    {
    return view('terminal_info_new',compact(['producers']));
    }


    public function create(TerminalInfoUpdateRequest $request)
    {
     $product_name= $request->input('product_name');
     $model_number= $request->input('model_number');
     $producer= $request->input('producer');

     TerminalInformation::create([
        'name' => $product_name,
        'model_number' =>$model_number,
        'producer' =>$producer
     ]);

    \Alert::success('','登録が完了しました。');

    return redirect()->route('terminal_info_index');
    }


    public function edit($id)
    {
      $terminal_information = TerminalInformation::find($id);

      return view('terminal_info_edit',compact(['terminal_information']));
    }


    public function update(TerminalInfoUpdateRequest $request,$id)
    {
     $terminal_informations = TerminalInformation::find($id);
     $product_name = $request->input('product_name');
     $model_number= $request->input('model_number');
     $producer= $request->input('producer');
     $terminal_informations->name = $product_name;
     $terminal_informations->model_number = $model_number;
     $terminal_informations->producer = $producer;
     $terminal_informations->update();

     \Alert::success('', '更新が完了しました。');
     return redirect()->route('terminal_info_edit', ['id' => $id]);
    }


    public function destroy($id)
    {
    $terminal_informations = TerminalInformation::find($id);
    $terminal_informations->delete();

    \Alert::success('', '削除が完了しました。');
    return redirect()->route('terminal_info_index');
    }

}
