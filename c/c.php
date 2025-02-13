<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สมัครสมาชิกชมรมเบเกอรี่</title>
</head>

<body>
 <h1>สมัครสมาชิกชมรมเบเกอรี่</h1>
 <form method="post" action="">
 คำนำหน้าชื่อ
        <input type="radio" name="name" value="นาย"> นาย
        <input type="radio" name="name" value="นาง"> นาง
        <input type="radio" name="name" value="นางสาว"checked>นางสาว
        <br><br>
 
  ชื่อ-สกุล <input type="text" name="a" required><br><br>
  อายุ
  <input type="number" name="b" min="0" max="100" 
  required autofocus><br><br>
  ระดับการศึกษา
    <select name="c">
    	<option value="ปริญญาตรี">ปริญญาตรี</option>
        <option value="ปริญญาโท">ปริญญาโท</option>
        <option value="ปริญาเอก">ปริญาเอก</option>
     </select><br><br>
  ปีการศึกษา
  <input type="number" name="d" min="1" max="4" 
  required autofocus><br><br>
  วันเดือนปีเกิด
  <input type="date" name="e">
	<br><br>
   ที่อยู๋
   <textarea name="address" cols="29.5" rows="4"></textarea>
     <br><br>
   เบอร์โทรศัพท์
    <input type="text" name="f" required><br><br>
    รหัสไปรษณีย์
    <input type="text" name="g" required><br><br>
   
    ชนิดเบเกอรี่ที่ชอบ
        <input type="radio" name="title" value="เค้ก"> เค้ก
        <input type="radio" name="title" value="คุกกี้"> คุกกี้
        <input type="radio" name="title" value="ขนมปัง"> ขนมปัง
        <input type="radio" name="title" value="เพสทรี"> เพสทรี
        <input type="radio" name="title" value="บราวนี่"checked> บราวนี่
        <input type="radio" name="title" value="เดนนิส/ครัวซอง">เดนนิส/ครัวซอง
        <br><br>
        
     Username
      <input type="text" name="h" required><br><br>
     Password
      <input type="password" name="i" required><br><br>
        
    <button type="Submit" name="Submit">สมัครสมาชิก</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.print();">พิมพ์หน้านี้</button>
 </form>
 <hr>

<?php
if(isset($_POST['Submit'])){
	echo @$_POST['name']."<br>";
	echo @$_POST['a']."<br>";
	echo @$_POST['b']."<br>";
	echo @$_POST['c']."<br>";
	echo @$_POST['d']."<br>";
	echo @$_POST['e']."<br>";
	echo @$_POST['address']."<br>";
	echo @$_POST['f']."<br>";
	echo @$_POST['g']."<br>";
	echo @$_POST['h']."<br>";
	echo @$_POST['i']."<br>";
	echo @$_POST['title']."<br>";
	
}
?>
</body>
</html>