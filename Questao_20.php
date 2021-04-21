<!DOCTYPE html>

<html lang="pt-br">
    <head>
   
        <meta charset="utf-8">
    </head>
    <body>

    <?php
        echo "Reajuste Dos Anos Trabalhados</br><br>";
        
        $primeiro_salario = 1000;
        $reajuste = 1.5;
        $valor_do_reajuste = ($primeiro_salario * (1.5 / 100));
        $i = 0;
        $salario_atual = ($primeiro_salario + $valor_do_reajuste);
        $ano_de_inicial = 2005;

        echo("<B>Ano de >></B> {$ano_de_inicial} | <B>Reajuste </B> 0%| <B>Salário inicial de:</B> R$ {$primeiro_salario}</br></br>");
        echo("<B>Inicio do Reajustes ano De >> </B> 2006 | <B>Reajuste :</B> {$reajuste}%| <B>Salário atual:</B> R$ {$salario_atual} </br></br>");
        
        for ($i = 2007; $i <= 2020; $i++)
        {
            $reajuste = $reajuste * 2;
            $reajuste = number_format($reajuste, 2, '.', '');
            $valor_do_reajuste = ($salario_atual * ($reajuste) / 100);
            $salario_atual = ($salario_atual + $valor_do_reajuste);

            $salario_atual = number_format($salario_atual, 2, '.', '');

            echo ("<B>Ano >></B> {$i}  <B>Reajuste de :</B> {$reajuste }% :<B> Salário atual >></B> R$ { $salario_atual }</br></br>");

        }

    ?>
           
    </body>
</html>