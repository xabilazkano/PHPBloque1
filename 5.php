<html>
	<head>
		<title>Prueba d1e PHP</title>
	</head>
	<body>
		<?php
		$edad=6;
		$altura=10;
		$compañia="acompañado";
		if($edad>=10 || $altura>=120){
			echo "Puede subir a la atraccion";
		}
		elseif($compañia=="acompañado" && $edad>5) {
			echo "Puede subir a la atraccion";
		}
		else{
			echo "No puede subir a la atraccion";
		}
		?>
	</body>
</html>