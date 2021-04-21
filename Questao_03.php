<!DOCTYPE html>
<html>
<head>
	<title>programação web</title>
	<meta charset="utf-8">
</head>
<body>
<form method="POST">
    <label>informe seu nome:</label><br>
    <input type="text" name="nome">
    <br>
    <label>informe sua idade:</label><br>
    <input type="text" name="idade">
    <input type="submit" value="testar">
</form>
<?php  
$nome = $_POST['nome'];
$idade = $_POST['idade'];
echo " Seu nome e $nome // Voçe Tem $idade anos  //";
 
 if ($idade < 18) {
 	echo "  Voçe e MenoR De Ddade";
 }
 	else{
 		echo "  Voçe e MaIoR De idade";
 	}
 
 ?>
   
<h2>Leonardo Silva</h2>
</body>
</html>