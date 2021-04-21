
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <title>programação web</title>
    <meta charset="utf-8">   
</head>

<body>

    <?php

    echo "digite um numero >> ";
  
    if(isset($_POST["L"])){
        echo $_POST["L"];
        echo "<br>";

        $num = $_POST["L"];

        if($num % 2 == 0){
            echo "número digitado é par:";
        }else{
            echo "número digitado é impar:";
        }
    }

    ?>
    <form method="POST">
    <input type="text" name="L">
    <input type="submit" value="testar">
</form>
<h2>Leonardo Silva</h2>
</body>
    </html>



