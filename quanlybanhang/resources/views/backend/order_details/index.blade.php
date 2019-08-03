<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<h1 align="center">Danh Sách Đơn Hàng Chi Tiết</h1>
<table border="1" id="example" class="display" style="width:100%">
    <thead>
        <tr style="background-color:rgb(94, 84, 84, 0.5);">
            <th>Tên Đơn Hàng</th>
            <th>Mã Đơn Hàng</th>
            <th>Tên Sản Phẩm</th>
            <th>Mã Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Giảm Giá</th>
            <th>Ngày Giao Hàng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listOrder_details as $order_detail)
        <tr>
            <td>{{$order_detail->order->ship_name}}</td>
            <td>{{$order_detail->order->ship_postal_code}}</td>
            <td>{{$order_detail->product->product_name}}</td>
            <td>{{$order_detail->product->product_code}}</td>
            <td>{{$order_detail->quantily}}</td>
            <td>{{$order_detail->unit_price}} VNĐ</td>
            <td>{{$order_detail->discount}}%</td>
            <td>{{$order_detail->date_allocated}}</td>
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