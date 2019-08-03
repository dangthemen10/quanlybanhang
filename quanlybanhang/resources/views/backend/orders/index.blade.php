<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<h1 align="center">Danh Sách Các Đơn Hàng</h1>
<table border="1" id="example" class="display" style="width:100%">
    <thead>
        <tr style="background-color:rgb(94, 84, 84, 0.5);">
            <th>Tên Đơn Hàng</th>
            <th>Mã Đơn Hàng</th>
            <th>Ngày Đặt</th>
            <th>Ngày Giao</th>
            <th>Địa Chỉ</th>
            <th>Tổng Tiền</th>
            <th>Tên Khách Hàng</th>
            <th>Tên Nhân Viên</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listOrders as $order)
        <tr>
            <td>{{$order->ship_name}}</td>
            <td>{{$order->ship_postal_code}}</td>
            <td>{{$order->order_date}}</td>
            <td>{{$order->shipped_date}}</td>
            <td>{{$order->ship_address1}}</td>
            <td>{{$order->shipping_fee}}</td>
            <td>{{$order->customer->last_name}} {{$order->customer->first_name}}</td>
            <td>{{$order->employee->last_name}} {{$order->employee->first_name}}</td>
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