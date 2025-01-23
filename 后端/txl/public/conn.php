<?php
$dbserver = "localhost";
$username = "rou001";
$password = "rou001";
$dbname = "rou001";
//创建连接
$conn = new mysqli($dbserver,$username,$password,$dbname);
//检查连接
if($conn->connect_error){die("连接失败:".$conn->connect_error);}
//时区设置
date_default_timezone_set('Asia/Shanghai');
?>