<?php

$num01 = $_POST ["txtNum1"];
$num02 = $_POST ["txtNum2"];
$opera =  $_POST ["Operação"];
$resul = "";

if ($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02);
    break;
    case "-":
      $resul = ($num01 - $num02);
    break;
    case "*":
      $resul = ($num01 * $num02);
    break;
    case "/":
      $resul = ($num01 / $num02);
    break;
    
    default:
    echo "opção invalido";
  }
}

?>

<!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
   </head>
   <body>
     <h1><?=$resul;?></h1>
     <form method="post">
       <label>DIGITE 1 NUMERO: <input type="text" name="txtNum1"/></label><br>
       <label>DIGITE 2 NUMERO: <input type="text" name="txtNum2"/></label><br>
       <label>Operação:
         <select name="Operação">
           <option value="+">SOMA</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
       <input type="submit" name="QUESTAOCHATA" value="TESTAR">
     </form>
   <H1> Leonardo Silva </H1>
   </body>
 </html>

