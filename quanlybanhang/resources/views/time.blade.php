@extends('layouts.master')
@section('title')
Time Page
@endsection
@section('content')
<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<script>
    window.setTimeout("showTime()", 1000);
function getVNTime(){
    var time = new Date();
    var dow = time.getDay();
    if(dow==0)
        dow = "Chủ nhật";
    else if (dow==1)
        dow = "Thứ hai";
    else if (dow==2)
        dow = "Thứ ba";
    else if (dow==3)
        dow = "Thứ tư";
    else if (dow==4)
        dow = "Thứ năm";
    else if (dow==5)
        dow = "Thứ sáu";
    else if (dow==6)
        dow = "Thứ bảy";  
    var day = time.getDate();
    var month = time.getMonth()+1;
    var year = time.getFullYear();
    var hr = time.getHours();
    var min = time.getMinutes();
    var sec = time.getSeconds();
    day = ((day < 10) ? "0" : "") + day;
    month = ((month < 10) ? "0" : "") + month;
    hr = ((hr < 10) ? "0" : "") + hr;
    min = ((min < 10) ? "0" : "") + min;
    sec = ((sec < 10) ? "0" : "") + sec;
    return dow + " " + day + "/" + month + "/" + year + " " + hr + ":" + min + ":" + sec;
}
function showTime(){
    var vnclock = document.getElementById("vnclock");
    if (vnclock != null)
        vnclock.innerHTML = getVNTime();
    setTimeout("showTime()", 1000);
}
</script>
<style>
    #vnclock{
    font-weight:bold;
    text-align:center;
    font-size:20px;
    padding:10px;
    color:#382ff8;
    box-shadow:inset 0 0 1px rgba(0,0,0,.08), 0 0 5px rgba(255, 165, 0, 0.5);
}
</style>
<span id="vnclock"></span>
@endsection