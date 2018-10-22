<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\TerminalManagement;

class TerminalInfoDestroyRequest extends FormRequest
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
             $terminal_information_id = \Route::getCurrentRoute()->parameters()['id']; // ←←← 暗黙の結合はここでも効く
             // 入力値とは関係ないが誰かしら設定している社員がいる場合はエラーを返す
             if (TerminalManagement::where('terminal_informations_id', $terminal_information_id)->count() > 0) {
                 $validator->errors()->add('terminal_information', trans('validation.custom.exists-terminal_information-id-in-terminal'));
             }
         });
     }
}
