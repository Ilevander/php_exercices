
<?php

	# retourne le code HTML (une chaîne de caractères)
	# d'une table 10x10 contenant les 10 tables de
	# multiplication
#On a affecter toute la page html à un tableau appelé arr
	function table() {
		$c = 0;
		$arr[$c] = "<html>
		<head>
		
		</head>
		<body>
		
		<h2><u>Tbleaux de Multiplication</u></h2>";
		for ($i=0 ; $i <= 10 ; $i++)
		  {	
		   $c++; 
			$arr[$c] = "<table> 
			<tr>
			  <th >Table de Multiplication</th>
			  <th >de $i </th>
		    </tr>";
              for($j= 0 ; $j <= 10 ; $j++)
				{ 
					$mul = $i * $j;
				$c++;
              $arr[$c] = " <tr>
			                <td>  $i X $j </td>
			                <td> $mul </td>
		                  </tr> ";
			     }
          $c++;
		  $arr[$c] = " </table> <br> <br>";
			  
	      }
		 
		$c++;
		$arr[$c] = "
         		</body>
		       </html>";

   return $arr;
	     }
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 5</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>

	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 80%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 6px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>

	<body>
		<h1>TP 1 - Exo 5</h1>
		<hr>
		<?php	

		$caller = table();
		foreach ($caller as $o){
		echo "$o "; 
		}
		
		 ?>
	</body>
</html>