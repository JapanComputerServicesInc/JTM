<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Employee;

class DepartmentDestroyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return[
      //
      ];
    }

    /**
      * @param \Illuminate\Validation\Validator $validator
      */
     public function withValidator(\Illuminate\Validation\Validator $validator)
     {
         $validator->after(function ($validator) {
             $department_id = \Route::getCurrentRoute()->parameters()['id']; // ←←← 暗黙の結合はここでも効く
             // dd($department_id);
             // 入力値とは関係ないが誰かしら設定している社員がいる場合はエラーを返す
             if (Employee::where('departments_id', $department_id)->count() > 0) {
                 $validator->errors()->add('v_department', trans('validation.custom.exists-department-id-in-employee'));
             }
         });
     }
}
