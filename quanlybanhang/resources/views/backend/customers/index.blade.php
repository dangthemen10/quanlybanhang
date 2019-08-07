@extends('backend.layouts.master')
@section('title')
Quản Trị - Khách Hàng
@endsection
@section('feature-title')
Danh Sách Khách Hàng
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<table border="1" id="example" class="display" style="width:100%">
    <thead>
        <tr style="background-color:rgb(94, 84, 84, 0.5);">
            <th>Tên Khách Hàng</th>
            <th>Email</th>
            <th>Công Ty</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
            <th>Trạng Thái</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listCustomers as $customer)
        <tr>
            <td>{{$customer->last_name}} {{$customer->first_name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->company}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address1}}</td>
            <td>{{$customer->state}}</td>
        </tr>
        @endforeach
    <tbody>
</table>
<!-- <script>
$(document).ready(function() {
    $('#example').DataTable();
} ); 
</script> -->
{{ $users->links() }}
@endsection

