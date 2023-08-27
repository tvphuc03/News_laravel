<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RuleNhaploai extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(){
        return [
            'ten' => ['string', 'required', 'min:2', Rule::unique('loaitin')],
        ];
    }
    public function messages(){
       return [
            'ten.required' => 'Vui lòng nhập tên loại tin',
            'ten.unique' => 'Tên loại tin đã tồn tại',
            'ten.string'=>'Tên loại tin phải nhập chuỗi',
            'ten.min'=>'Tên loại tin phải có ít nhất 2 kí tự'
        ];
    }
}
