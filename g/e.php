<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จุฑามาศ พรมวงศ์ (นุ่น)</title>
</head>

<body>
	<h1>จุฑามาศ พรมวงศ์ (นุ่น)  </h1>
    
    <form method="post" ection="">
      แม่สูตรคูณ <input type="number" min="2" max="1000" name="a" required autofocus>
      
      <button type="submit" name="Submit">OK</button>
     </form> <hr>
      
    <?php
	if (isset($_POST['Submit'])) {
		$m = $_POST['a'];
		for($i=1; $i<=12; $i++){
			$x = $m * $i ;
	?>
      <?=$m;?> x <?=$i;?> = <?=$x;?> <br>

    <?php 
	  } // end for
	} // end if 
	?>
<body>
</body>
</html>