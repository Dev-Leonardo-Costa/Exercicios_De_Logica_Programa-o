
<!DOCTYPE html>

<html lang="pt-br">
    <head>
   
        <meta charset="utf-8">
    </head>
    <body>

        <form  method="get" action="#">
            <p>
                <label><B> Responda com SIM ou NÃO:</B></label><br/>
                <label>Telefonou para a vítima?</label><br/>
                <input type="checkbox" name="sim[]" value= "1">SIM
                <input type="checkbox" name="nao[]" value= "1">NÃO</br>
                <label>Esteve no local do crime?</label><br/>
                <input type="checkbox" name="sim[]" value= "1">SIM
                <input type="checkbox" name="nao[]" value= "1">NÃO</br>
                <label>Mora perto da vítima?</label><br/>
                <input type="checkbox" name="sim[]" value= "1">SIM
                <input type="checkbox" name="nao[]" value= "1">NÃO</br>
                <label>Devia a vítima?</label><br/>
                <input type="checkbox" name="sim[]" value= "1">SIM
                <input type="checkbox" name="nao[]" value= "1">NÃO</br>
                <label>Já trabalhou com a vítima?</label><br/>
                <input type="checkbox" name="sim[]" value= "1">SIM
                <input type="checkbox" name="nao[]" value= "1">NÃO</br>
                <button><type="submit">Enviar</button ><br>            
            </p>
        </form>
    <?php
        if ((!empty($_GET['sim'])) && (!empty($_GET['nao'])))
        {
        
        $todossim = count($_GET['sim']);
        $todosnao = count($_GET['nao']);

        
        if ($todossim == 5 and $todosnao == 0)
        {
            echo(">> o elemento é Assassino <<");
        }
        elseif ($todossim > 2 and $todossim < 5)
        {
            echo(">> o elemento é Cúmplice <<");
        }
        elseif($todossim == 2 or $todosnao ==3)
        {
            echo(" >> o elemento é Suspeito <<");
        }

        elseif ($todossim == 0 and $todosnao == 5)
        {
            echo(" >> o elemento é Inocente <<");
        }
               
      }
    ?>
          <h1> Leonardo Silva </h1> 
    </body>
</html>

