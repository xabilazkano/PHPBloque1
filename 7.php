<html>
<head>
	<title>Prueba d1e PHP</title>
</head>
<body>
	<?php
		$numero = 10;

		while($numero!=1){
			if($numero%2==0){
				$numero=$numero/2;
			}
			else{
				$numero=$numero*3+1;
			}
			echo $numero.", ";
		}

	?>
</body>
</html>