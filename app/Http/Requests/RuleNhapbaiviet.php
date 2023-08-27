<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RuleNhapbaiviet extends FormRequest
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
    public function rules(): array
    {
        return [
            'hinh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20000',
            'tieude' => ['string', 'required', 'min:2', Rule::unique('tin')],
            'tomtat' => ['string', 'required', 'min:10'],
            'ngay' => ['date'],
            'tags' => ['string', 'min:2', 'max:100'],
            'noidung' => ['string', 'required', 'min:100'],
        ];
    }
    public function messages()
    {
        return [
            'tieude.string' => 'Nhập tiêu đề là chuỗi',
            'tieude.required' => 'Bạn chưa nhập tiêu đề',
            'tieude.min' => 'Tiêu đề tối thiểu là 2 kí tự',
            'tieude.unique' => 'Tiêu đề đã có',
            'tomtat.string' => 'Nhập nội dung tóm tắt là chuỗi',
            'tomtat.required' => 'Bạn chưa nhập nội dung tóm tắt ',
            'tomtat.min' => 'Tóm tắt tối thiểu là 10 kí tự',
            'tags.string' => 'Nhập tags là chuỗi',
            'tags.min' => 'Tags tối thiểu là 2 kí tự',
            'ngay.date' => 'Nhập chưa đúng dạng ngày',
            'hinh.required' => 'Bạn chưa nhập hình',
            'noidung.string' => 'Nhập nội dung là chuỗi',
            'noidung.required' => 'Bạn chưa nhập nội dung',
            'noidung.min' => 'Nội dung tối thiểu là 100 kí tự',
            'image.required' => 'Chưa có hình',
            'image.image' => 'File phải là ảnh.',
            'image.mimes' => 'Chỉ nhân file có đuôi là JPEG, PNG, JPG, GIF, and SVG',
            'image.max' => 'Ảnh không được quá 20MB',
        ];
    }
}
