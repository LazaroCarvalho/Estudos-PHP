<!-- CÓDIGO PHP -->

<?php
    
$nome = $_GET['txtnome'];
echo($nome);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Aula 01 - PHP
        </title>
    </head>
    <body>
        <!-- 
            name - nome do elemento no html

            method - existe apenas 2 metodos, o GET e o POST
                get - envia os dados digitados no formulário para a url da pagina

                post - envia os dados digitados no formulário em cache do navegador.

            acton - para onde serão enviados os dados.
        -->
        <form name="frmexercicio1" method="get" action="exercicio1.php">
            Nome:
            <input type="text" name="txtnome" value="" size="50">
            <input type="submit" name="btnok" value="OK">
        </form>
    </body>
</html>
