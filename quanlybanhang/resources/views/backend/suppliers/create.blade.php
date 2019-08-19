@extends('backend.layouts.master')
@section('title')
Quản Trị - Thêm Mới Nhà Cung Cấp
@endsection
@section('feature-title')
Thêm Mới Nhà Cung Cấp
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
<form name="frmCreateCategory" id="frmCreateSupplier" method="post" action="{{ route('backend.supplier.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="supplier_code">Mã Nhà Cung Cấp</label>
    <input type="text" class="form-control" id="supplier_code" name="supplier_code" aria-describedby="supplier_codeHelp" placeholder="Nhập mã nhà cung cấp . . .">
  
  </div>
  <div class="form-group" >
    <label for="supplier_name">Tên Nhà Cung Cấp</label>
    <input type="text" class="form-control" id="supplier_name" name="supplier_name" aria-describedby="supplier_nameHelp" placeholder="Nhập tên nhà cung cấp . . .">

  </div>
  <div class="form-group" >
    <label for="description">Mô Tả</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Nhập mô tả nhà cung cấp . . .">

  </div>
  <div class="form-group" >
    <label for="image">Ảnh Đại Diện</label>
    
    <input type="file" class="form-control" id="image" name="image" aria-describedby="imageHelp" >
  </div>
  <a href="{{ route('backend.supplier.index') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@section('custom-scripts')
<script>
  $(document).ready(function() {
    $("#frmCreateSupplier").validate({
      rules: {
        supplier_code: {
          required: true,
          minlength: 3,
          maxlength: 20
        },
        supplier_name: {
          required: true,
          minlength: 3,
          maxlength: 20
        },
        description: {
          required: true,
          minlength: 6,
          maxlength: 200
        },
        image: {
          required: true
        },
      },
      messages: {
        supplier_code: {
          required: "Vui lòng nhập mã Nhà cung cấp",
          minlength: "Mã nhà cung cấp phải có ít nhất 3 ký tự",
          maxlength: "Mã nhà cung cấp không được vượt quá 20 ký tự"
        },
        supplier_name: {
          required: "Vui lòng nhập tên Nhà cung cấp",
          minlength: "Tên nhà cung cấp phải có ít nhất 3 ký tự",
          maxlength: "Tên nhà cung cấp không được vượt quá 20 ký tự"
        },
        description:{
          required: "Vui lòng nhập mô tả nhà cung cấp",
          minlength: "Mô tả nhà cung cấp phải có ít nhất 6 ký tự",
          maxlength: "Mô tả nhà cung cấp không được vượt quá 200 ký tự"
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