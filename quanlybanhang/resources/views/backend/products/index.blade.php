@extends('backend.layouts.master')
@section('title')
Quản Trị - Sản Phẩm
@endsection
@section('feature-title')
Danh Sách Sản Phẩm
@endsection
@section('content')
<a href="{{ route('backend.product.create') }}" class="btn btn-primary">Thêm mới</a>
<table class="table-bordered table-hover ">
    <thead>
        <tr class="table-success" >
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Ảnh</th>
            <th>Mô Tả Sản Phẩm</th>
            <th>Nhà Cung Cấp</th>
            <th>Loại Sản Phẩm</th>
            <th>Giá Nhập Sản Phẩm</th>
            <th>Số Lượng Sản Phẩm</th>
            <th>Giá Bán Sản Phẩm</th>
            <th>Trạng Thái Sản Phẩm</th>                
            <th>Giảm Giá</th>
            <th colspan="2">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listProducts as $product)
        <tr>
            <td>{{$product->product_code}}</td>
            <td>{{$product->product_name}}</td>
            <td>
                <img src="{{ asset('storage/uploads/'. $product->image) }}" width="80px" height="80px"/>
            </td>
            <td>{{$product->description}}</td>
            <td>{{$product->category->category_name}}</td>
            <td>{{$product->supplier->supplier_name}}</td>
            <td>{{$product->standard_code}} VNĐ</td>
            <td>{{$product->quantily_per_unit}}</td>
            <td>{{$product->list_price}} VNĐ</td>
            @if($product->discontinued == 0)
                <td>Còn Bán</td>
            @else
                <td>Ngưng Bán</td>
            @endif
            <td>{{$product->discount}}%</td>
            <td>
                <a class="btn btn-primary" href="{{ route('backend.product.edit', ['id'=>$product->id]) }}">Edit</a>
                
            </td>
            <td>
                <form name="frmDeleteProduct" id="frmDeleteProduct" method="post" action="{{ route('backend.product.destroy', ['id' => $product->id]) }}">
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
                title: 'Bạn Có Chắc Xóa Không?',
                text: "Nếu bạn xóa thì dữ liệu này sẽ không phục hồi được!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Xóa Dữ liệu!',
                    'Dữ liệu của bạn đã được xóa',
                    'Thành Công'
                    )

                    //submit form
                    $('#frmDeleteProduct').submit();
                }
                })
        })
    })
</script>
@endsection