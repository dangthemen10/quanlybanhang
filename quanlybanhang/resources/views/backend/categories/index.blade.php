@extends('backend.layouts.master')
@section('title')
Quản Trị - Loại Sản Phẩm
@endsection
@section('feature-title')
Danh Sách Loại Sản Phẩm
@endsection
@section('content')

<a href="{{ route('backend.category.create') }}" class="btn btn-primary">Thêm mới</a>
<table  class="table table-bordered ">
    <thead>
        <tr style="background-color:rgb(94, 84, 84, 0.5); text-align: center;">
            <th>Mã Loại Sản Phẩm</th>
            <th>Tên Loại Sản Phẩm</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listCategory as $category)
        <tr>
            <td>{{$category->category_code}}</td>
            <td>{{$category->category_name}}</td>
            <td>{{$category->description}}</td>
            <td>
                <img src="{{ asset('storage/uploads/'. $category->image) }}" width="80px" height="80px"/>
            </td>
            <td>
                <a href="{{ route('backend.category.edit', ['id'=>$category->id]) }}">Edit</a>
                <form name="frmDeleteCategory" method="post" action="{{ route('backend.category.destroy', ['id' => $category->id]) }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE"/>
                <input type="submit" value="Delete"/>
                </form>
            </td>
            
            
        </tr>
        @endforeach
    <tbody>
</table>
{{ $users->links() }}
@endsection

