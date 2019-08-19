@extends('backend.layouts.master')
@section('title')
Quản Trị - Nhà Cung Cấp
@endsection
@section('feature-title')
Danh Sách Nhà Cung Cấp
@endsection
@section('content')

<a href="{{ route('backend.supplier.create') }}" class="btn btn-primary">Thêm mới</a>
<table  class="table table-bordered table-hover">
    <thead>
        <tr class="table-success" style="text-align: center;">
            <th>Mã Nhà Cung Cấp</th>
            <th>Tên Nhà Cung Cấp</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th colspan="2">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listSupplier as $supplier)
        <tr>
            <td>
                {{$supplier->supplier_code}}
            </td>
            <td>{{$supplier->supplier_name}}</td>
            <td>{{$supplier->description}}</td>
            <td>
                <img src="{{ asset('storage/uploads/'. $supplier->image) }}" width="80px" height="80px"/>
            </td>
            <td>
                <a class="btn btn-primary" href="{{ route('backend.supplier.edit', ['id'=>$supplier->id]) }}">Edit</a>
                
            </td>
            <td>
                <form name="frmDeleteSupplier" id="frmDeleteSupplier" method="post" action="{{ route('backend.supplier.destroy', ['id' => $supplier->id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button class="btn btn-danger btn-icon-split btn-delete">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete</span>
                    </button>
                </form>
            </td>
            
        </tr>
        @endforeach
    <tbody>
</table>
{{ $users->links() }}
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function(){
        $('.btn-delete').click(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )

                    //submit form
                    $('#frmDeleteSupplier').submit();
                }
                })
        })
    })
</script>
@endsection
