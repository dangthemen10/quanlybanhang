@extends('backend.layouts.master')
@section('title')
Quản Trị - Nhân Viên
@endsection
@section('feature-title')
Danh Sách Nhân Viên
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
            <th>Tên Nhân Viên</th>
            <th>Tên Tài Khoản</th>
            <th>Email</th>
            <th>Ảnh</th>
            <th>Công Việc</th>
            <th>Bộ Phận</th>
            <th>Mã Quản lý</th>
            <th>Số Điện Thoại</th>
            <th>Địa Chỉ</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listEmployees as $employee)
        <tr>
            <td>{{$employee->last_name}} {{$employee->first_name}}</td>
            <td>{{$employee->username}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->avatar}}</td>
            <td>{{$employee->job_title}}</td>
            <td>{{$employee->department}}</td>
            <td>{{$employee->manager_id}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->address1}}</td>
        </tr>
        @endforeach
    <tbody>
</table>
<!-- <script>
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script> -->
{{ $users->links() }}
@endsection