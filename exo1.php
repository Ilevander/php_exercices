<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 1</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 1</h1>
		<hr>

		<h2>
			<?php
			$h=date("h");
			$m=date("i");
			$s=date("s");
			echo "Il est " . $h ." heures(s) , " . $m ." minutes(s) et " . $s . " seconde(s) "
			?>
		</h2>
	</body>
</html>
