@extends('backend.layouts.master')

@section('title')
Quản Trị - Thêm mới Sản phẩm
@endsection

@section('feature-title')
Thêm mới Sản phẩm
@endsection

@section('content')
<!-- DIV hiển thị thông báo lỗi start -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- DIV hiển thị thông báo lỗi end -->

<form name="frmCreateProduct" id="frmCreateProduct" method="post" action="{{ route('backend.product.store') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="product_code">Mã sản phẩm</label>
    <input type="text" class="form-control" id="product_code" name="product_code" aria-describedby="product_codeHelp" placeholder="Nhập mã sản phẩm" value="{{ old('product_code') }}">

  </div>
  <div class="form-group">
    <label for="product_name">Tên sản phẩm</label>
    <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="product_nameHelp" placeholder="Nhập Tên sản phẩm" value="{{ old('product_name') }}">
    
  </div>
  <div class="form-group">
    <label for="image">Ảnh đại diện sản phẩm</label>
    <input type="file" class="form-control" id="image" name="image" aria-describedby="imageHelp" >
  
  </div>
  <div class="form-group">
    <label for="description">Diễn giải sản phẩm</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Nhập diễn giải sản phẩm" value="{{ old('description') }}">

  </div>
  <div class="form-group">
    <label for="standard_code">Giá nhập sản phẩm</label>
    <input type="text" class="form-control" id="standard_code" name="standard_code" aria-describedby="standard_codeHelp" placeholder="Nhập Giá nhập sản phẩm" value="{{ old('standard_code') }}">
  </div>
  <div class="form-group">
    <label for="list_price">Giá bán sản phẩm</label>
    <input type="text" class="form-control" id="list_price" name="list_price" aria-describedby="list_priceHelp" placeholder="Nhập Giá bán sản phẩm" value="{{ old('list_price') }}">
  </div>
  <div class="form-group">
    <label for="quantily_per_unit">Số lượng sản phẩm</label>
    <input type="text" class="form-control" id="quantily_per_unit" name="quantily_per_unit" aria-describedby="quantily_per_unitHelp" placeholder="Nhập Số lượng sản phẩm" value="{{ old('quantily_per_unit') }}">
  </div>
  <div class="form-group">
    <label for="discontinued">Ngưng bán?</label>
    @if(old('discontinued'))
    <input type="checkbox" class="form-control" id="discontinued" name="discontinued" aria-describedby="discontinuedHelp" checked>
    @else
    <input type="checkbox" class="form-control" id="discontinued" name="discontinued" aria-describedby="discontinuedHelp">
    @endif
  </div>
  <div class="form-group">
    <label for="discount">% giảm giá sản phẩm</label>
    <input type="text" class="form-control" id="discount" name="discount" aria-describedby="discountHelp" placeholder="Nhập % giảm giá sản phẩm" value="{{ old('discount') }}">
  </div>
  <div class="form-group">
    <label for="category_id">Loại sản phẩm</label>
    <select id="category_id" name="category_id" class="form-control">
      @foreach($listCategories as $category)
        @if(old('category_id') == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="supplier_id">Nhà cung cấp</label>
    <select id="supplier_id" name="supplier_id" class="form-control">
      @foreach($listSuppliers as $supplier)
      <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
      @endforeach
    </select>
  </div>
  <a class="btn btn-primary" href="{{ route('backend.product.index') }}" class="btn">Quay về</a>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<script>
  $(document).ready(function() {
    $("#frmCreateProduct").validate({
      rules: {
        product_code: {
          required: true,
          minlength: 3,
          maxlength: 20
        },
        product_name: {
          required: true,
          minlength: 3,
          maxlength: 20
        },
        image: {
          required: true
        },
        description: {
          required: true,
          minlength: 3,
          maxlength: 200
        },
        standard_code:{
          required: true
        },
        list_price: {
          required: true
        },
        quantily_per_unit: {
          required: true
        },
        discount: {
          required: true
        },
        category_id: {
          required: true
        },
        supplier_id: {
          required: true
        },
      },
      messages: {
        product_code: {
          required: "Vui lòng nhập mã Loại sản phẩm",
          minlength: "Mã loại sản phẩm phải có ít nhất 3 ký tự",
          maxlength: "Mã loại sản phẩm không được vượt quá 20 ký tự"
        },
        product_name: {
          required: "Vui lòng nhập tên Loại sản phẩm",
          minlength: "Tên loại sản phẩm phải có ít nhất 3 ký tự",
          maxlength: "Tên loại sản phẩm không được vượt quá 20 ký tự"
        },
        image: {
          required: "Vui lòng chọn ảnh đại diện cho sản phẩm"
        },
        description: {
          required:  "Vui lòng nhập mô tả sản phẩm",
          minlength:  "Mô tả sản phẩm phải có ít nhất 6 ký tự",
          maxlength:  "Mô tả sản phẩm không được vượt quá 200 ký tự"
        },
        standard_code: {
          required: "Vui lòng nhập giá nhập của sản phẩm"
        },
        list_price: {
          required: "Vui lòng nhập giá bán của sản phẩm"
        },
        quantily_per_unit: {
          required: "Vui lòng nhập số lượng của sản phẩm"
        },
        discount: {
          required: "Vui lòng nhập phần trăm giảm giá của sản phẩm"
        },
        category_id:{
          required: "Vui lòng chọn loại sản phẩm"
        },
        supplier_id: {
          required: "Vui lòng chọn nhà cung cấp"
        },
      },
      errorElement: "em",
      errorPlacement: function(error, element) {
        // Thêm class `invalid-feedback` cho field đang có lỗi
        error.addClass("invalid-feedback");
        if (element.prop("type") === "checkbox") {
          error.insertAfter(element.parent("label"));
        } else {
          error.insertAfter(element);
        }
        // Thêm icon "Kiểm tra không Hợp lệ"
        if (!element.next("span")[0]) {
          $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
            .insertAfter(element);
        }
      },
      success: function(label, element) {
        // Thêm icon "Kiểm tra Hợp lệ"
        if (!$(element).next("span")[0]) {
          $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
            .insertAfter($(element));
        }
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).addClass("is-valid").removeClass("is-invalid");
      }
    });
  });
</script>


@endsection