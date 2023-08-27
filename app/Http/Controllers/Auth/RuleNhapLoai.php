<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RuleNhapLoai extends FormRequest {
    public function authorize() { return true;}
    public function rules() {
        return [
            'ten' => ['string', 'required', 'min:2', Rule::unique('loaitin')],

        ];
    }
    public function messages(){ return [
        'ten.string' => 'Nhập tên loại là chuỗi',
        'ten.required' => 'Bạn chưa nhập tên loại',
        'ten.min' => 'Tên loại tối thiếu là 2 kí tự',
        'ten.unique'=> 'Đã tồn tại tên loại'
      ];
    }
}
