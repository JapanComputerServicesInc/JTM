<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositoryUpdateRequest extends FormRequest
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
        if ($this->id) { // 編集画面の時
           $unique = 'unique:depositories,name,' . $this->id . ',id';
        } else { // 新規登録画面の時
           $unique = 'unique:depositories,name';
        }

       return [ 'depository_name'=>'required|' . $unique];
    }

}
