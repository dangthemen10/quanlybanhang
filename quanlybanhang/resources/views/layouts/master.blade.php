<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Bán Hàng | @yield('title')</title>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet"/>
    <!-- CSS của bootstrap-->
    <link href="{{asset('vender/bootstrap/css/bootstrap.css')}}" type="text/css" rel="stylesheet"/>

</head>
<body>
    <div class="container">
        <!-- Dòng header-->
        <div class="row">
            <div class="col-md-3" id="logo">
                Logo company
            </div>
            <div class="col-md-9" id="company-name">
                Name Company
            </div>
        </div>
        <!--Nội dung-->
        <div class="row">
            <div class="col-md-3" id="sidebar">
            </div>
            <div class="col-md-9" id="content">
                @yield('content')
            </div>
        </div>
        <!--footer-->
        <div class="row">
            <div class="col-md-12" id="footer">
            CopyRight@2019
            </div>
        </div>
    </div>





    <!--JS của jquery -->
    <script src="{{asset('vender/jquery/jquery.min.js')}}"></script>
    <!--JS của popperjs -->
    <script src="{{asset('vender/popperjs/popper.min.js')}}"></script>
    <!--JS của bootstrap -->
    <script src="{{asset('vender/bootstrap/js/bootstrap.js')}}"></script>
    
</body>
</html>