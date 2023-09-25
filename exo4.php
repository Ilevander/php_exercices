<?php

	# si '$N' est premier, retourne '$N'
	# sinon retourne le plus petit diviseur
	# de '$N'. Par exemple :
	# - premier(13) -> 13
	# - premier(35) -> 5
	function premier($N) {

		# sinon retourne le plus petit diviseur
		#On a commencé& par 2 car ; tout les nombre sont divisible par 1 , ainsi pour que une fois qu'on sort de la bouce on aurra le 1 et le N (lui même sont des diviseurs)et on va retourner le N
	 for($i = 2; $i < $N ;$i++){
       if($N % $i == 0){
         return $i;
	   }
	 }
	 # si '$N' est premier, retourne '$N'
	 #ll reste le 1 et lui même qu'il vont indiquer qu'il est premier , car le nombre premier divise lui même et divisible par le 1
	 return $N;

	}

	# retourne une chaîne de caractères du type :
	# - "Le nombre N est premier" si '$N' est premier
	# - "Le nombre N n'est pas premier car multiple de D"
	#   si '$N' est divisible par un nombre D (et donc, pas premier)
	function resultat($N) {
		 $test= premier($N);
		 if($test == $N){
			$string = "Le nombre $N est premier";
			return $string;
		 }
		 else {
		 	    $string = "Le nombre $N n'est pas premier car multiple de $t";
		         return $string;
              }

	}

	
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 4</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 4</h1>
		<hr>
	
	<?php 
	 	$k = $_GET['n'];

		echo resultat($k);

		# Il suffit juste de faire cela : http://localhost/DEVOIR%20PHP/exo4.php?n= xxxx  => ici vou mettez votre code
	?>

		<h2> </h2>
		<a class="bouton" href="exo4.html">Autre test</a>
	</body>
</html>