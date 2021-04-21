<!DOCTYPE html>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
   
        <meta charset="utf-8">
    </head>
  <body>
  <form method="get" action="#">
    <label>Informe seu nome:</label><br/>
    <input type="text" name="NOME"><br></br>
    <label>Informe seu email:</label><br/>
    <input type="text" name="EMAIL"><br></br>
    <label>Informe sua data de nascimento:</label><br/>
    <input type="date" name="NASC"><br></br>
  
                <legend>Escolha seu cartão de crédito: </legend>
                 <select name = "CARTOES">
                  <option value = "1" >Visa</option>
                  <option value = "2" >Mastercard</option>
                  <option value = "3" >Elo</option>
                  <option value = "5" >Outras Bandeira</option>
                </select><br>  
              
    <input type="submit" value="TESTAR">
  </form>
                
<?php
  if ((!empty($_GET["NOME"])) && (!empty($_GET["EMAIL"])) && (!empty($_GET["NASC"]))) {
     $nome = $_GET["NOME"];
     $email = $_GET["EMAIL"];
     $datanasc = $_GET["NASC"];
     $cartao = $_GET["CARTOES"];
  
  echo "Nome do titula >> $nome </br> Email cadastrado >> $email </br> Data Nascimento >> $datanasc </br>";

switch ($cartao) {
  case "01":
    echo "cartao >> Visa";
    break;
  case "02":
    echo "cartão >> Mastercard";;
    break;
  case "03":
    echo "cartão >> Elo";
    break;
 
  case "04":
    echo "Outras Bandeira";
    break;
  }
}
?>
		<H1>Leonardo Silva</H1>   
    </body>
</html>