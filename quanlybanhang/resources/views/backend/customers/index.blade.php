<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<h1 align="center">Danh Sách Khách Hàng</h1>
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
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>