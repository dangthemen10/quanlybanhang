<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierCreateRequest extends FormRequest
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
            'supplier_code' => 'required|min:3|max:20|unique:suppliers', //tên table suppliers
            'supplier_name' => 'required|min:3|max:20',
            'description'   => 'required|min:6|max:200',
        ];
    }
    public function messages()
    {
        return [
            'supplier_code.required' => 'Vui lòng nhập mã nhà cung cấp',
            'supplier_code.min' => 'Vui lòng nhập mã nhà cung cấp ít nhất 3 ký tự',
            'supplier_code.max' => 'Vui lòng nhập mã nhà cung cấp tối đa 20 ký tự',
            'supplier_code.unique' => 'Mã nhà cung cấp này đã tồn tại. Vui lòng nhập mã khác',
            'supplier_name.required' => 'Vui lòng nhập tên nhà cung cấp',
            'supplier_name.min' => 'Vui lòng nhập tên nhà cung cấp ít nhất 3 ký tự',
            'supplier_name.max' => 'Vui lòng nhập tên nhà cung cấp tối đa 20 ký tự',
            'description.required'       => 'Vui lòng nhập mô tả nhà cung cấp',
            'description.min'       => 'Mô tả nhà cung cấp phải có ít nhất 6 ký tự',
            'description.max'       => 'Mô tả nhà cung cấp không được vượt quá 200 ký tự'
        ];
    }
}
