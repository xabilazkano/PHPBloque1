<html>
	<head>
		<title>Prueba d1e PHP</title>
	</head>
	<body>
		<?php
			
			$palabra = "aassaagh";
			

				
			$palabra2 = strrev($palabra);

			if($palabra==$palabra2){
				echo "La palabra es un palindromo";
			}
			else{
				echo "La palabra no es un palindromo";
			}


		?>
	</body>
</html>