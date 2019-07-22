@extends('layouts.master')
@section('title')
Hello Page
@endsection
@section('content')
<?php
$hoten = "<b>Phan Hải Đăng</b>";
$gioitinh = 0;
?>
Giá trị của biến $hoten escaped: {{ $hoten }} <br>
Giá trị của biến $hoten no escaped: {!! $hoten !!} <br>
Giá trị của biến : @{{ $hoten }} <br>
Giới tính là: 
@if($gioitinh==0) {{'Là Nam'}}
@elseif($gioitinh==1) {{'Là Nữ'}}
@else($gioitinh==2) {{'Không Xác Định'}}
@endif
@endsection