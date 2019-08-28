@extends('print.layout.paper')

@section('title')
In danh sách Loại sản phẩm
@endsection

@section('paper-size')
A4
@endsection

@section('paper-class')
A4
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="width:150px;">
                    <img src="{{ asset('img/OlYx2fY.png') }}" style="width:150px;height:150px;" />
                </td>
                <td style="text-align: right;vertical-align: middle;">
                    <span style="font-weight: bold;font-size: 2em;">HẢI ĐĂNG COMPANY</span> </br>
                    <span style="font-weight: bold;font-size: 1em;">Địa Chỉ: Đường 3/2, P. Xuân Khánh, Q.Ninh Kiều, TP. Cần Thơ</span> </br>
                    <span style="font-weight: bold;font-size: 1em;">Email: phanhaidangkgumt@gmail.com</span></br>
                    <span style="font-weight: bold;font-size: 1em;">Hotline: 0947223877</span> 
                    
                </td>
            </tr>
        </table>

        <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="text-align: center;">
                    <span style="font-weight: bold;font-size: 1.5em;">Danh Sách Loại Sản Phẩm</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <td>Mã loại sản phẩm</td>
                <td>Tên loại sản phẩm</td>
                <td>Diễn giải loại sản phẩm</td>
                <td>Hình ảnh</td>
            </tr>
            @foreach($listCategory as $category)
            <tr>
                <td>{{ $category->category_code }}</td>
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <img src="{{ asset('storage/uploads/' . $category->image ) }}" width="80px" height="80px" />
                </td>
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection