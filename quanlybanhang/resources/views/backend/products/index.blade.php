<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<h1 align="center">Danh Sách Sản Phẩm</h1>
<table border="1" id="example" class="display" style="width:100%">
    <thead>
        <tr style="background-color:rgb(94, 84, 84, 0.5);">
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
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>