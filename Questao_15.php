<!DOCTYPE html>

<html lang="pt-br">
    <head>
   
        <meta charset="utf-8">
    </head>
    <body>

        <form method="get" action="#">
                <label> tempo de uso do seu aparelho em dias:</label><br/>
                <input type="number" name="DIAS"><br/>
                <input type="submit" value="TESTAR">
        </form>
    <?php
     if (!empty($_GET["DIAS"]))
      {
        $uso = (int)($_GET['DIAS']);
        $vida = 2020;
        $finaisdosdias = $vida - $uso;

        if($uso > $vida)
        {
            echo ("Seu aparelho está com vida útil no fim, favor providenciar a troca.");
        }
        else
        {
            echo ("Seu aparelho tem a durabilidade para $finaisdosdias");
        }

      }

    ?>
           
    </body>
</html>