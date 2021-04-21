<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<title>prgramação web</title>
	<form method="POST">
	<meta charset="utf-8">
	<label>DIGITE SUA 1 NOTA</label>
	<input type="text" name="nota1"><br>
	<label>DIGITE SUA 2 NOTA</label>
	<input type="text" name="nota2">
	<input type="submit" value="Testar">
	</form>
			
			<?php
					
			$nota1 = (float)$_POST['nota1'];
			$nota2 = (float) $_POST['nota2'];
			$finalnota = (float) ($nota1 + $nota2) /2;
			
			if ($finalnota < 7 ) {
			
				echo "REPROVADO";		
			}
			
			 else{
			 	echo "APROVADO ";
			 }
			?>
<h1>Leonardo Silva</h1>
</head>

<body>

</body>
</html>