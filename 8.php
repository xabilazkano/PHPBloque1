<html>
<head>
	<title>Prueba de PHP</title>
</head>
<body>
	<?php 

	$base_impar=7;
	$espacios=$base_impar;

	for($estrellas=1;$estrellas<=$base_impar;$estrellas=$estrellas+2){
		
		for($i=0;$i<$espacios;$i++){

			echo "&nbsp;";
		}

		for($i=0;$i<$estrellas;$i++){
			echo"*";
		}

		if ($espacios>=0) {
			$espacios--;
			echo"<br>";
		}



	}

	?>
</body>
</html>