<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TerminalCreateRequest extends FormRequest
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
        return [
        'pc_name'=> 'required|unique:terminal_managements,pc_name',
        'model_name'=>'required',
        'serial_no'=>'required',
        'status'=>'required',
        'depository'=>'required',
        'product_name'=>'required',


        ];
    }

}
