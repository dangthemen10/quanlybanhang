@extends('backend.layouts.master')
@section('title')
Quản Trị - Loại Sản Phẩm
@endsection
@section('feature-title')
Danh Sách Loại Sản Phẩm
@endsection
@section('content')

<a href="{{ route('backend.category.create') }}" class="btn btn-primary">Thêm mới</a>
<table  class="table table-bordered table-striped table-responsive">
    <thead>
        <tr style="background-color:rgb(94, 84, 84, 0.5); text-align: center;">
            <th>Mã Loại Sản Phẩm</th>
            <th>Tên Loại Sản Phẩm</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listCategory as $category)
        <tr>
            <td>{{$category->category_code}}</td>
            <td>{{$category->category_name}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->image}}</td>
            
        </tr>
        @endforeach
    <tbody>
</table>
{{ $users->links() }}
@endsection

