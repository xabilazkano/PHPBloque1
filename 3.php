<html>
	<head>
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php
		
		$numero=12;
		if($numero>0 && $numero<=10){
			echo "Esta en la franja de 1-10";
		}
		elseif($numero>10 && $numero<=20){
			echo "Esta en la franja de 11-20";
		}
		elseif($numero>20 && $numero<=30){
			echo "Esta en la franja de 21-30";
		}
		elseif($numero>30 && $numero<=40){
			echo "Esta en la franja de 31-40";
		}
		elseif($numero>40 && $numero<=50){
			echo "Esta en la franja de 41-50";
		}
		elseif($numero>50 && $numero<=60){
			echo "Esta en la franja de 51-60";
		}
		elseif($numero>60 && $numero<=70){
			echo "Esta en la franja de 61-70";
		}
		elseif($numero>70 && $numero<=80){
			echo "Esta en la franja de 71-80";
		}
		elseif($numero>80 && $numero<=90){
			echo "Esta en la franja de 81-90";
		}
		elseif($numero>90 && $numero<=100){
			echo "Esta en la franja de 90-100";
		}
		else{
			echo "No se encuentra en la franja 1-100";
		}
		?>
	</body>
</html>