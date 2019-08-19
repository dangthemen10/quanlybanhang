@extends('backend.layouts.master')
@section('title')
Quản Trị - Loại Sản Phẩm
@endsection
@section('feature-title')
Danh Sách Loại Sản Phẩm
@endsection
@section('content')

<a class="btn btn-primary" href="{{ route('backend.category.create') }}" >Thêm Mới</a>
<table  class="table table-bordered table-hover">
    <thead>
        <tr class="table-success" style="text-align: center;">
            <th>Mã Loại Sản Phẩm</th>
            <th>Tên Loại Sản Phẩm</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th colspan="3" >Chức Năng</th>
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
                <a class="btn btn-primary" href="{{ route('backend.category.edit', ['id'=>$category->id]) }}">Edit</a>
                
            </td>
            <td>
                <form name="frmDeleteCategory" id="frmDeleteCategory" method="post" action="{{ route('backend.category.destroy', ['id' => $category->id]) }}">
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
                    $('#frmDeleteCategory').submit();
                }
                })
        })
    })
</script>
@endsection
