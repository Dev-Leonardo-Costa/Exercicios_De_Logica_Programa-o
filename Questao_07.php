<!DOCTYPE html>
<html lang="pt-br">
<head>
		<title>programação web</title>
		 <form  method="get">
	  <label>informe a area do Quadrado</label><br>
	  <input type="text" name="Quadrado"/><br/>
	  <input type="submit" value="Testar"/>
	  </form>
</head>
<body>
<h1>PHP</h1>
<?php
if (($_GET["Quadrado"])){
$lado = (float) $_GET["Quadrado"];
$area = (float) ($lado * $lado);
$dobroarea = (float) ($area*2); 

 echo "O dobro da área é: $dobroarea"; 

}
?>
<h2>Leonardo Silva</h2>
</body>
</html>