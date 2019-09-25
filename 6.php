<html>
<head>
	<title>Prueba d1e PHP</title>
</head>
<body>
	<?php

		$potencia=3;
		$maximo =100;

	for($i=1;$i<$maximo;$i++){
		if(pow($i,$potencia)<=$maximo){
			
			echo $i."-".pow($i,$potencia)."<br>";
		}
	
	}
	?>
</body>
</html>