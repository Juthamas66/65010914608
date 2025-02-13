<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จุฑามาศ พรมวงศ์ (นุ่น)</title>
</head>

<body>
	<h1>จุฑามาศ พรมวงศ์ (นุ่น)  </h1>
    
    <form method="post" ection="">
      จำนวน <input type="number" min="1" max="1000" name="a" required autofocus>
      <button type="submit" name="Submit">OK</button>
     </form> <hr>
      
    <?php
	if (isset($_POST['Submit'])) {
		$c = $_POST['a'];
		echo "แสดงจำนวน $c รูป <br><br>";
		for($i=1; $i<=$c; $i++){
	?>
    
     <img src="https://img.freepik.com/fotos-premium/es-sublimacion-barbie_469760-25989.jpg" width="200">
    <?php 
	  } // end for
	} // end if 
	?>
<body>
</body>
</html>