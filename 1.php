<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
 		
 		$pisos= rand(2,5);
 		$puertas=["A","B","C"];


 		for($i=1;$i<$pisos;$i++){
 			for ($e=0; $e <count($puertas) ; $e++) { 
 				echo $i.$puertas[$e]."<br>";
 			}
 		}

  ?>
 </body>
</html>