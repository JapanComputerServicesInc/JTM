<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\TerminalManagement;

class DepositoryDestroyRequest extends FormRequest
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
             $depository_id = \Route::getCurrentRoute()->parameters()['id']; // ←←← 暗黙の結合はここでも効く
             // 入力値とは関係ないが誰かしら設定している社員がいる場合はエラーを返す
             if (TerminalManagement::where('depositories_id', $depository_id)->count() > 0) {
                 $validator->errors()->add('depository', trans('validation.custom.exists-depository-id-in-terminal'));
             }
         });
     }
}
