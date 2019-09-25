<html>
<head>
	<title>Prueba de PHP</title>
</head>
<body>
	<?php
	$primero= 2;
	$segundo= 1;
	$tercero = 3;

	if($primero>$segundo && $primero>$tercero){
		echo "El primer numero es el mayor";
	}
	elseif($segundo>$primero && $segundo>$tercero){
		echo "El segundo numero es el mayor";
	}
	elseif($tercero>$primero && $tercero>$segundo){
		echo "El tercer numero es el mayor";
	}
	else{
		echo "Los numeros son iguales";
	}
	?>
</body>
</html>