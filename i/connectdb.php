<?php 
$host = "localhost";
$user = "root";
$pwd = "87654321";
$db = "shop4608";

$conn = mysqli_connect ($host, $user, $pwd, $db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_select_db($conn, "shop")or die ("เลือกฐานข้อมูลไม่ได้");
mysqli_query($conn, "set names utf8")
?>