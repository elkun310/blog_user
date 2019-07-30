<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editUserRequest extends FormRequest
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
            'full'=>'required|min:3',
            'phone'=>'required|unique:users,phone',
            'address'=>'required|min:4',
            'id_number'=>'required|numeric',  
        ];
    }
    public function messages()
    {
        return [
            'full.required'=>'Họ tên không được để trống',
            'full.min'=>'Họ tên không được nhỏ hơn 3 ký tự',
            'phone.required'=>'Số đt  không được để trống',
            'phone.unique'=>'Số điện thoại không được trùng',
            'address.required'=>'Địa chỉ không được để trống',
            'address.min'=>'Địa chỉ không được nhỏ hơn 4 ký tự',
            'id_number.required'=>'Số cmt không được để trống',
            'id_number.numeric'=>'Số cmt phải là số',
        ];
    }
}
