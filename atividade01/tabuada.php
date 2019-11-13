<?php 

    require_once("modulos/funcoes.php");
    require_once("modulos/constantes.php");

    $tabuada = null;
    $contador = null;
    $erro = null;
    $resposta = null;

    // O if abaixo será executado se o botão for clicado.
    if(isset($_GET['btncalcular']))
    {
        
        // Substituindo eventuais vírgulas por pontos, para que se possa calcular.
        $tabuada = str_replace(",",".",$_GET['txttabuada']);
        $contador = str_replace(",",".",$_GET['txtcontador']);
        
        // Verificando se algum campo deixou de ser preenchido.
        if(!($tabuada == "" || $contador == ""))
        {
            // Verificando se todos os valores digitados são números
            if(is_numeric($tabuada) && is_numeric($contador))
            {
                
                // Verificando se o campo Tabuada foi preenchido com 0, pois não existe tabuada do 0!
                if (!$tabuada == 0)
                {
                    
                    // Chamando a função para calcular a tabuada.
                    // Esta função retorna uma String.
                    $resposta = tabuada($tabuada, $contador);
                    
                } else {
                    $erro = ERRO_VALOR_ZERO;
                }
                
            } else {
                $erro = ERRO_CARACTER_INVALIDO;
            }
            
        } else {
            $erro = ERRO_CAIXA_VAZIA;
        }
        
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
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
                                            <a>
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
                <div class="conteudo center" id="hold_tabuada">
                    <div id="container_tabuada">
                        <div id="titulo_tabuada">
                            <h2>Tabuada</h2>
                        </div>
                        <div id="corpo_tabuada">
                            <div id="container_formulario_tabuada">
                                <div id="input_container_tabuada">
                                    <div id="erro_tabuada">
                                        <?=$erro?>
                                    </div>
                                    <form name="frmformulario" method="get" action="tabuada.php">
                                        <div id="input_tabuada">
                                            Tabuada: <input type="text" name="txttabuada" size="10" maxlength="10" class="inputs_tabuada" value="<?=$tabuada?>"><br>
                                            Contador:<input type="text" name="txtcontador" size="10" maxlength="10" class="inputs_tabuada" value="<?=$contador?>">
                                        </div>
                                        <input type="submit" name="btncalcular" value="Calcular" id="botao_tabuada">
                                    </form>
                                    <div id="resultado_tabuada">
                                        <?=$resposta?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>