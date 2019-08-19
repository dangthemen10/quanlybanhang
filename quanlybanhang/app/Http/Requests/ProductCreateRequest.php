<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // authentication -> xác thực
        // authorize -> phân quyền
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
            'product_code' => 'required|min:3|max:20|unique:products',
            'product_name' => 'required|min:3|max:20',
            'image'         => 'required',
            'description'   => 'required|min:3|max:200',
            'standard_code' => 'required',
            'list_price'    => 'required',
            'quantily_per_unit' => 'required',
            'discount'      => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
        ];
    }
    public function messages() {
        return [
            'product_code.required' => 'Vui lòng nhập mã sản phẩm',
            'product_code.min' => 'Vui lòng nhập mã sản phẩm ít nhất 3 ký tự',
            'product_code.max' => 'Vui lòng nhập mã sản phẩm tối đa 20 ký tự',
            'product_code.unique' => 'Mã sản phẩm này đã tồn tại. Vui lòng nhập mã khác',
            'product_name.required' => 'Vui lòng nhập tên sản phẩm',
            'product_name.min' => 'Vui lòng nhập tên sản phẩm ít nhất 3 ký tự',
            'product_name.max' => 'Vui lòng nhập tên sản phẩm tối đa 20 ký tự',
            'image.required'    => 'Vui lòng chọn ảnh cho sản phẩm',
            'description.required'       => 'Vui lòng nhập mô tả sản phẩm',
            'description.min'       => 'Mô tả sản phẩm phải có ít nhất 6 ký tự',
            'description.max'       => 'Mô tả sản phẩm không được vượt quá 200 ký tự',
            'standard_code.required'=> 'Vui lòng nhập giá nhập của sản phẩm',
            'list_price.required'   => 'Vui lòng nhập giá bán của sản phẩm',
            'quantily_per_unit.required' => 'Vui lòng nhập số lượng của sản phẩm',
            'discount.required'     => 'Vui lòng nhập phần trăm giảm giá của sản phẩm',
            'category_id.required'  => 'Vui lòng chọn loại sản phẩm',
            'supplier_id.required'  => 'Vui lòng chọn nhà cung cấp'
        ];
    }
}
