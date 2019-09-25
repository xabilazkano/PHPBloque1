<html>
	<head>
		<title>Prueba dee PHP</title>
	</head>
	<body>
		<?php
		$total_compra=30.21;
		$tipo_compra="mascota";

		
		if($total_compra<19){
			if($tipo_compra=="mascota"){
				echo "No se puede realizar el envio";
			}
			elseif ($tipo_compra=="ropa") {
				echo "Los gastos de envio son 9&euro;<br>";
				$total_compra=$total_compra+9;
			
			}
			
		}
		elseif($total_compra>=19 && $total_compra<=40){
			echo "Los gastos de envio son 9&euro;<br>";
			$total_compra=$total_compra+9;
		}
		elseif($total_compra>80){
			echo "Los gastos de envio son gratuitos<br>";
		}


		if($tipo_compra=="mascota"){
			$total_compra=$total_compra*0.10+$total_compra;
			echo "Precio total a pagar : ".$total_compra;
		}
		elseif($total_compra=="ropa"){
			$total_compra=$total_compra*0.21*$total_compra;
			echo "Precio total a pagar : ".$total_compra;
		}
		
		?>
	</body>
</html>