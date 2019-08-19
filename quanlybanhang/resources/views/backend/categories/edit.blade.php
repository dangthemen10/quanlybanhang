@extends('backend.layouts.master')
@section('title')
Quản Trị - Hiệu Chỉnh Loại Sản Phẩm
@endsection
@section('feature-title')
Hiệu Chỉnh Loại Sản Phẩm
@endsection
@section('content')
<form name="frmCreateCategory" method="post" action="{{ route('backend.category.update',['id'=>$category->id]) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group" >
    <label for="category_code">Mã Loại Sản Phẩm</label>
    <input type="text" class="form-control" id="category_code" name="category_code" aria-describedby="category_codeHelp" placeholder="Nhập mã loại sản phẩm . . ." value="{{ $category->category_code }}">
    
  </div>
  <div class="form-group" >
    <label for="category_name">Tên Loại Sản Phẩm</label>
    <input type="text" class="form-control" id="category_name" name="category_name" aria-describedby="category_nameHelp" placeholder="Nhập tên loại sản phẩm . . ." value="{{ $category->category_name}}">
   
  </div>
  <div class="form-group" >
    <label for="description">Mô Tả</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="descriptionHelp" placeholder="Nhập mô tả loại sản phẩm . . ." value="{{ $category->description }}">
  
  </div>
  <div class="form-group" >
    <label for="image">Ảnh Đại Diện</label>
    <img src="{{ asset('storage/uploads/'. $category->image) }}" width="80px" height="80px"/>
    <input type="file" class="form-control" id="image" name="image" aria-describedby="imageHelp" >
  </div>
  <a href="{{ route('backend.category.index') }}" class="btn btn-primary">Quay về</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection