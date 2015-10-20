<html>

  <head>
  <title>Titulo</title>
    <meta charset="UTF-8">

  </head>
  <body>
	<?php
	
	for($x=1;$x<1000;$x++){
		if($x%3==0){
			$i = $i + $x;
		}
		else if($x%5==0){
			$a = $a + $x;
		}
		
	}
	
	echo "<p>Multiplos de 3: $i</p>";
	echo "<p>Multiplos de 5: $a</p>";
	echo "<p>Resultado: $i + $a</p>";

	
	?>
  </body>

<html>
