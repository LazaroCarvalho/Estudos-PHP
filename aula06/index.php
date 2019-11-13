<?php 
    
    if(isset($_GET['btnCalcular'])) 
    {
        $numeroFinal = $_GET['txtValor'];
        $cont = (integer) 0;
        
        echo("------USANDO WHILE------<br>");
        while($cont <= $numeroFinal) 
        {
            echo($cont. "<br>");
            $cont++;
        }
        
        echo("<br>------USANDO FOR------<br>");
        for($cont = 0; $cont <= $numeroFinal; $cont++)
        {
            echo($cont. "<br>");
        }
        echo "<br>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Estruturas de Repetição</title>
    </head>
    <body>
        <form name="frmRepeticao" method="get" action="index.php">
            Digite um número: <input type="text" name="txtValor" value=""><br>
            <input type="submit" name="btnCalcular" value="Calcular">
        </form>                     
    </body>
</html>