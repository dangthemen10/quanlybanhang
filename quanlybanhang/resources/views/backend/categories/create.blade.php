@extends('backend.layouts.master')
@section('title')
Quản Trị - Thêm Mới Loại Sản Phẩm
@endsection
@section('feature-title')
Thêm Mới Loại Sản Phẩm
@endsection
@section('content')
<form name="frmCreateCategory" method="post" action="{{ route('backend.category.store') }}">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="category_code">Mã Loại Sản Phẩm</label>
    <input type="text" class="form-control" id="category_code" name="category_code" aria-describedby="category_codeHelp" placeholder="Nhập mã loại sản phẩm . . .">
    <small id="category_codeHelp" class="form-text text-muted">Nhập mã loại sản phẩm (24 ký tự)</small>
  </div>
  <div class="form-group" >
    <label for="category_name">Tên Loại Sản Phẩm</label>
    <input type="text" class="form-control" id="category_name" name="category_name" aria-describedby="category_nameHelp" placeholder="Nhập tên loại sản phẩm . . .">
    <small id="category_nameHelp" class="form-text text-muted">Nhập Tên loại sản phẩm (24 ký tự)</small>
  </div>
  <div class="form-group" >
    <label for="description">Mô Tả</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Nhập mô tả loại sản phẩm . . .">
    <small id="descriptionHelp" class="form-text text-muted">Nhập mô tả loại sản phẩm trên </small>
  </div>
  <div class="form-group" >
    <label for="image">Ảnh Đại Diện</label>
    <input type="file" class="form-control" id="image" name="image" aria-describedby="imageHelp" >
  </div>
  <a href="{{ route('backend.category.index') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection