<?php 

    require_once('modulos/funcoes.php');
    require_once('modulos/constantes.php');

    $nota1 = null;
    $nota2 = null;
    $nota3 = null;
    $nota4 = null;
    $resultado = null;
    $erro = null;

    if(isset($_GET['btnCalcular']))
    {
        // Armazenando em variáveis os valores inseridos nos campos.
        // Caso o usuário insira números com vírgulas, troca elas por pontos para que se possa efetuar o cálculo.
        $nota1 = str_replace(",",".",$_GET['txtnota1']); 
        $nota2 = str_replace(",",".",$_GET['txtnota2']);
        $nota3 = str_replace(",",".",$_GET['txtnota3']);
        $nota4 = str_replace(",",".",$_GET['txtnota4']);

        // Verificando se há campos vazios.
        if(!($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == ""))
        {
            
           // Verificando se todos os valores inseridos são números.
           if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
            {
                // Chamando a função que calculará a média.
                $resultado = calcularMedia($nota1,$nota2,$nota3,$nota4);
               
            } else
            {
              $erro = ERRO_CARACTER_INVALIDO;
            }
        } else
        {
            $erro = ERRO_CAIXA_VAZIA;
        }

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculando a média de notas</title>
    </head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <body>
        <header id="header">
            <div class="conteudo center">
                <div id="container_menu">
                    <img src="icons/icons8-menu-50.png">
                    <nav id="hold_menu">
                        <ul id="menu">
                            <li class="menu_itens">
                                <a target="_blank">
                                    Média
                                </a>
                            </li>
                            <li class="menu_itens">
                                Calculadora
                                <nav id="submenu_calculadora">
                                    <ul id="submenu">
                                        <li class="submenu_itens">
                                            <a href="calculadora_switch.php" target="_blank">
                                                Calculadora (SWITCH)
                                            </a>
                                        </li>
                                        <li class="submenu_itens">
                                            <a href="calculadora_if.php" target="_blank">
                                                Calculadora (IF)
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                            <li class="menu_itens">
                                <a href="tabuada.php" target="_blank">
                                    Tabuada
                                </a>
                            </li>
                            <li class="menu_itens">
                                <a href="par-impar.php" target="_blank">
                                   Pares e Ímpares 
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section id="imagem_home">
            <div id="imagem_vidro">
                <div class="conteudo center" id="media_conteudo">
                    <div id="container_media">
                        <div id="media_titulo">
                            <h1>Cálculo da Média</h1>
                        </div>
                        <div id="media_corpo">
                            <div id="error_message">
                                <?=$erro?>
                            </div>
                            <div id="container_formulario">
                                <form name="frmformulario" method="get" action="media.php">
                                    <div id="formulario_input">
                                        Nota 1: <input type="text" name="txtnota1" value="<?=$nota1?>" size="7" maxlength="10"><br>
                                        Nota 2: <input type="text" name="txtnota2" value="<?=$nota2?>" size="7" maxlength="10"><br>
                                        Nota 3: <input type="text" name="txtnota3" value="<?=$nota3?>" size="7" maxlength="10"><br>
                                        Nota 4: <input type="text" name="txtnota4" value="<?=$nota4?>" size="7" maxlength="10"><br>
                                        </div>
                                        <input type="submit" name="btnCalcular" value="Calcular" id="btncalcular">
                                </form>
                            </div>
                        </div>
                        <div id="media_resultado">
                            Média: <?=$resultado?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>