<?php
    
    require_once('modulos/funcoes.php');
    require_once('modulos/constantes.php');

    $valor1 = null;
    $valor2 = null;
    $resultado = null;
    $chkSomar = null;
    $chkSubtrair = null;
    $chkMultiplicar = null;
    $chkDividir = null;
    $erro = (string) "";

    // Verificando se o usuário clicou no botão Calcular.
    if (isset($_GET['btnCalcular'])) {
        
        // Verificando se algum campo está vazio.
        if (!(empty($_GET['txtvalor1']) || empty($_GET['txtvalor2'])) && isset($_GET['rdoopcoes'])){
            
            // Substituindo possíveis vírgulas por pontos, para que se possa efetuar o cálculo.
            $valor1 = str_replace(",",".",$_GET['txtvalor1']);
            $valor2 = str_replace(",",".",$_GET['txtvalor2']);
            
            // Verificando os valores inseridos no formulário são números.
            if (is_numeric($valor1) && is_numeric($valor2)) {
                
             $conta = strtolower($_GET['rdoopcoes']);  
                
             $resultado = calcularIf($valor1, $valor2, $conta); // Chamando a função que realizará a operação.
                
            } else {
                $erro = ERRO_CARACTER_INVALIDO; /* Se os campos não foram preenchidos com
                                                   números, este erro aparecerá na tela. */
            }
        } else {
            $erro = ERRO_CAIXA_VAZIA; /* Se algum campo ficou vazio, este erro aparecerá
                                         na tela */
        }
    }
?>

<head>
    <head>
        <title>Calculadora Simples</title>
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
                                <a href="media.php" target="_blank">
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
                <div class="conteudo center" id="calc_if">
                    <div id="caixa2">
                        <div id="titulo2">
                            <h1>Calculadora Simples</h1>
                        </div>
                        <div id="corpo">
                            <div class="error_warning">
                                <?=$erro?>
                            </div>
                            <div id="formulario">
                                <form name="frmformulario" method="get" action="calculadora_if.php">
                                    <div id="valores">
                                        Valor 1: <input type="text" name="txtvalor1" value="<?=$valor1?>" size="20">
                                        <br>
                                        Valor 2: <input type="text" name="txtvalor2" value="<?=$valor2?>" size="20">
                                    </div>
                                    <div id="opcoes">
                                        <input type="radio" name="rdoopcoes" value="somar" <?=$chkSomar?>> Somar
                                        <br>
                                        <input type="radio" name="rdoopcoes" value="subtrair" <?=$chkSubtrair?>> Subtrair
                                        <br>
                                        <input type="radio" name="rdoopcoes" value="multiplicar" <?=$chkMultiplicar?>> Multiplicar
                                        <br>
                                        <input type="radio" name="rdoopcoes" value="dividir" <?=$chkDividir?>> Dividir
                                        <br>
                                        <input type="submit" name="btnCalcular" value="Calcular" class="calculadora_botao_calcular">
                                    </div>
                                    <div id="resultado">
                                        <h1><?=round($resultado, "2")?></h1>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</head>