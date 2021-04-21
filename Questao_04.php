<!DOCTYPE html>
<html lang="pt-br">
<head>
	<form method="POST">
	<meta charset="utf-8">
	<title>progrmação web</title>
	<label>informe o valor de A</label><br>
	<input type="tesxt" name="A"><br>
	<label>informe o valor de B</label><br>
	<input type="tesxt" name="B">
	<input type="submit" name="testar">
    </form>
  
  <?php 
	   $A = $_POST['A'];
	   $B = $_POST['B'];
   	
   		if ($A>$B){
	   		echo " A MAIOR QUE B";
	   }else{
	   		echo "A MENOR QUE B";
	   }
  
   ?>

</head>
<body>
<h2>Leonardo Silva</h2>

</body>
</html>>