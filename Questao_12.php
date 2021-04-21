
<!DOCTYPE html>

<html lang="pt-br">
    <head>
   
        <meta charset="utf-8">
    </head>
    <body>

        <form  method="get" action="#">
            <p>
                <label>qual seu nome </label><br/>
                <input type="text" name="Nome" required><br>
                <label> primeira nota:</label><br/>
                <input type="number" name="N1" min = "0" max = "10" step="any" required><br>
                <label>segunda nota:</label><br/>
                <input type="number" name="N2" min = "0" max = "10" step="any" required><br>
                <label>terceira nota:</label><br/>
                <input type="number" name="N3" min = "0" max = "10" step="any" required><br>
                <input type="submit" value="Enter">

            </p>
        </form>
    <?php
     if (!empty($_GET["Nome"]) and !empty($_GET["N1"] and !empty($_GET['N2'] and !empty($_GET['N3']))))
      {
        $nome = ($_GET['Nome']);
        $n01 = ($_GET['N1']);
        $n02 = ($_GET['N2']);
        $n03 = ($_GET['N3']);
       
        $suamedia = ($n01 + $n02 + $n03) / 3;
        
        echo ("seu nome e $nome sua media é $suamedia ");
      }
      if ($suamedia < 6) {
      	echo "reprovado";
      }
      else {
        echo "aprovado";
      }

    ?>
		   <h2>Leonardo Silva</h2>
    </body>
</html>