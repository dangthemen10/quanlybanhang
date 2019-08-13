@extends('backend.layouts.master')
@section('title')
Quản Trị - Sản Phẩm
@endsection
@section('feature-title')
Danh Sách Sản Phẩm
@endsection
@section('content')
<table class="table table-hover table-bordered ">
    <thead>
        <tr class="table-primary" >
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Nhà Cung Cấp</th>
            <th>Loại Sản Phẩm</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listProducts as $product)
        <tr>
            <td>{{$product->product_code}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->category->category_name}}</td>
            <td>{{$product->supplier->supplier_name}}</td>
        </tr>
        @endforeach
    <tbody>
</table>

{{ $users->links() }}
@endsection