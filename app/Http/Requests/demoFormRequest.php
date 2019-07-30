<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class demoFormRequest extends FormRequest
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
            'mail'=>'required|email',
            'pass'=>'required|min:5',
        ];
    }
    public function messages()
    {
        return [
            'mail.required'=>'Mail là bắt buộc',
            'mail.email'=>'Định dạng mail không chính xác',
            'pass.required'=>'Mật khẩu không được để trống',
            'pass.min'=>'Mật khẩu dài hơn 5 ký tự',
        ];
    }
}
