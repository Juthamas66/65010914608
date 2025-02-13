<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จุฑามาศ พรมวงศ์ (นุ่น)</title>
</head>

<body>
    <h1>จุฑามาศ พรมวงศ์ (นุ่น)</h1>
    
    <form method="post" action="">
    ราคาสินค้ารวม <input type="number" name="A" min="0"  autofocus required>
    <button type="submit" name="Submit">OK</button>
    </form>
    <hr>
     
<?php
if(isset($_POST['Submit'])){
  	$price = $_POST['A'] ;
 	if ($price >= 5000) {
	  $Discount = $price * 15/100 ;
	  } else if ($price >= 2000) {
  	  $Discount = $price * 10/100 ; 
 	  } else if ($price >= 1000) {
  	  $Discount = $price * 5/100 ; 
	  } else {
	  $Discount = 0 ;
	}

	$net = $price - $Discount ;
	
	echo "ราคาสินค้ารวม = ".number_format($price,0)." บาท <br>";
	echo "ส่วนลดที่ได้รับ = ".number_format($Discount,0) ." บาท <br>";
	echo "จำนวนเงินที่จ่ายจริง = ".number_format($net) ." บาท <br>";
}
?>

</body>
</html>