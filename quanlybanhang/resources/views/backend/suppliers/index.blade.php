@extends('backend.layouts.master')
@section('title')
Quản Trị - Nhà Cung Cấp
@endsection
@section('feature-title')
Danh Sách Nhà Cung Cấp
@endsection
@section('content')

<a href="{{ route('backend.supplier.create') }}" class="btn btn-primary">Thêm mới</a>
<table  class="table table-bordered ">
    <thead>
        <tr style="background-color:rgb(94, 84, 84, 0.5); text-align: center;">
            <th>Mã Nhà Cung Cấp</th>
            <th>Tên Nhà Cung Cấp</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listSupplier as $supplier)
        <tr>
            <td>{{$supplier->supplier_code}}</td>
            <td>{{$supplier->supplier_name}}</td>
            <td>{{$supplier->description}}</td>
            <td>
                <img src="{{ asset('storage/uploads/'. $supplier->image) }}" width="80px" height="80px"/>
            </td>
            <td>
                <a href="{{ route('backend.supplier.edit', ['id'=>$supplier->id]) }}">Edit</a>
            </td>
            
        </tr>
        @endforeach
    <tbody>
</table>
{{ $users->links() }}
@endsection

