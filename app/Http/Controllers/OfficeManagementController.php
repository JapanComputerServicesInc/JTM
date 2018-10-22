<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OfficeUpdateRequest;
use App\Http\Requests\OfficeDestroyRequest;
use App\OfficeInformation;
use App\OfficeLicense;

class OfficeManagementController extends Controller
{

    public function index()
    {
    $office_informations = OfficeInformation::paginate(20);
    return view('office_index',compact(['office_informations']));
    }


    public function new()
    {
    $licenses = OfficeLicense::pluck('name','id');
    return view('office_new',compact(['licenses']));
    }


    public function create(OfficeUpdateRequest $request)
    {
     $office= $request->input('office');
     $office_licenses_id= $request->input('office_licenses_id');
     OfficeInformation::create([
        'name' => $office,
        'office_licenses_id' => $office_licenses_id
     ]);

    \Alert::success('','登録が完了しました。');

    return redirect()->route('office_index');
    }


    public function edit($id)
    {
      $license = OfficeLicense::pluck('name','id');
      $office_information = OfficeInformation::find($id);
      return view('office_edit',compact(['license','office_information']));
    }


    public function update(OfficeUpdateRequest $request,$id)
    {
     $office_information = OfficeInformation::find($id);
     $office = $request->input('office');
     $office_licenses_id= $request->input('office_licenses_id');
     $office_information->name = $office;
     $office_information->office_licenses_id = $office_licenses_id;
     $office_information->update();

     \Alert::success('', '更新が完了しました。');
     return redirect()->route('office_edit', ['id' => $id]);
    }


    public function destroy(OfficeDestroyRequest $request,$id)
    {
    $office_information = OfficeInformation::find($id);
    $office_information->delete();

    \Alert::success('', '削除が完了しました。');
    return redirect()->route('office_index');
    }

}
