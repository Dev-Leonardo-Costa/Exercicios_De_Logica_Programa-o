<!DOCTYPE html>
<html lang="pt-br">
    <head>
   
        <meta charset="utf-8">
		<title>programacao web</title>   
    </head>
	<body>
	<form method="get" action="#">
		<label>Quanto você ganha por hora?</label><br/>
		<input type="text" name="VR" ><br></br>
		<label>Quantas horas trabalhadas no mês?</label><br/>
		<input type="text" name="HS" ><br></br>
		<input type="submit" value="testar">
	</form>

<?php
if (!empty($_GET["VR"]) && !empty($_GET["HS"]) ){
$valorHora = (float) $_GET["VR"];
$horasMes =  (float) $_GET["HS"];
$salario = (float) ($valorHora) * ($horasMes);

echo "Valor por hora: $valorHora ! Horas trabalhadas: $horasMes ! Salário final do mês: $salario";
}

?>
<h1>ass: Leonardo Silva</h1>
</body>
</html>