<html>
<head>
	<title>Prueba d1e PHP</title>
</head>
<body>
	<?php
		
		$ventas=20000;

		if($ventas<10000){
			echo "La comision es un 5%";
		}
		elseif ($ventas>=10000 && $ventas<20000) {
			echo "La comision es un 8%";
		}
		elseif ($ventas>=20000 && $ventas<40000) {
			echo "La comision es un 10%";
		}
		elseif ($ventas>=40000) {
			echo "La comision es un 13%";
		}

	?>
</body>
</html>