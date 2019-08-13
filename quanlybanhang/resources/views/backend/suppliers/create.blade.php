@extends('backend.layouts.master')
@section('title')
Quản Trị - Thêm Mới Nhà Cung Cấp
@endsection
@section('feature-title')
Thêm Mới Nhà Cung Cấp
@endsection
@section('content')
<form name="frmCreateCategory" method="post" action="{{ route('backend.supplier.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="supplier_code">Mã Nhà Cung Cấp</label>
    <input type="text" class="form-control" id="supplier_code" name="supplier_code" aria-describedby="supplier_codeHelp" placeholder="Nhập mã nhà cung cấp . . .">
    <small id="supplier_codeHelp" class="form-text text-muted">Nhập mã nhà cung cấp (24 ký tự)</small>
  </div>
  <div class="form-group" >
    <label for="supplier_name">Tên Nhà Cung Cấp</label>
    <input type="text" class="form-control" id="supplier_name" name="supplier_name" aria-describedby="supplier_nameHelp" placeholder="Nhập tên nhà cung cấp . . .">
    <small id="supplier_nameHelp" class="form-text text-muted">Nhập Tên nhà cung cấp (24 ký tự)</small>
  </div>
  <div class="form-group" >
    <label for="description">Mô Tả</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Nhập mô tả nhà cung cấp . . .">
    <small id="descriptionHelp" class="form-text text-muted">Nhập mô tả nhà cung cấp trên </small>
  </div>
  <div class="form-group" >
    <label for="image">Ảnh Đại Diện</label>
    
    <input type="file" class="form-control" id="image" name="image" aria-describedby="imageHelp" >
  </div>
  <a href="{{ route('backend.supplier.index') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection