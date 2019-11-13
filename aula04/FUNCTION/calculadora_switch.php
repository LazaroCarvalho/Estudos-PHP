<?php
    /* Existem dois comandos:
        
        settype() - Altera o tipo de dados de uma variável
        gettype() - Retorna o tipo de dados da variável.
        
    */

    /* 
        Importação de arquivos em PHP
        
            include()
            inclue_once()
            require()
            require_once()
    */

    require_once('MODULOS/funcoes.php');

    $valor1 = null;
    $valor2 = null;
    $resultado = (double) "";
    $chkSomar = (string) "";
    $chkSubtrair = (string) "";
    $chkMultiplicar = (string) "";
    $chkDividir = (string) "";

    if (isset($_GET['btnCalcular']))
    {
        if (!((empty($_GET['txtvalor1']) || empty($_GET['txtvalor2']) || !isset($_GET['rdoopcoes']))))
        {
            /*
                str_replace() - Substitui um caracter por outro.
                strstr() - Localiza um conteúdo apartir de um caracter.
                    Ex: strstr($valor, ",");
            */
            $valor1 = str_replace(",",".",$_GET['txtvalor1']);
            $valor2 = str_replace(",",".",$_GET['txtvalor2']);
            
            if (is_numeric($valor1) && is_numeric($valor2))
            {
                /*    
                    strtoupper() - converte o conteúdo para minúsculo.
                    strtolower() - converte o conteúdo para maiúsculo.
                    round() - Permite configurar a quantidade de casas decimais após a vírgula.
                */
                
                $conta = strtolower($_GET['rdoopcoes']);
                
                // Chamando a função calcular.
                $resultado = calcular($valor1, $valor2,$conta);
                
            }else {
                echo(ERRO_CARACTER_INVALIDO);
            }
        }else {
            echo(ERRO_CAIXA_VAZIA);
        }
    }
?>

<head>
    <head>
        <title>Calculadora Simples</title>
    </head>
    <style>
        
        #caixa {
            width: 500px;
            height: 500px;
            border: solid black 2px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 120px;
        }
        
        #titulo {
            width: inherit;
            height: 120px;
            text-align: center;
            color: white;
            background-color: black;
            padding-top: 15px;
            box-sizing: border-box;
        }
        
        #corpo {
            width: inherit;
            height: 380px;
            padding-top: 20px;
            box-sizing: border-box;
        }
        
        #formulario {
            height: inherit;
            width: inherit;
        }
        
        #valores {
            width: 229px;
            height: 100px;
            margin-top: 40px;
            margin-left: auto;
            margin-right: auto;
        }
        
        #valores input {
            margin-bottom: 13px;
        }
        
        #opcoes {
            width: 100px;
            height 200px;
            margin-left: 60px;
            float: left;
        }
        
        #resultado {
            width: 250px;
            height: 230px;
            background-color: blue;
            float: left;
            margin-top: -10px;
            margin-left: 90px;
            padding-top: 40px;
            box-sizing: border-box;
            text-align: center;
            font-size: 25px;
        }
        
    </style>
    <body>
        <div id="caixa">
            <div id="titulo">
                <h1>Calculadora Simples</h1>
            </div>
            <div id="corpo">
                <div id="formulario">
                    <form name="frmformulario" method="get" action="calculadora_switch.php">
                        <div id="valores">
                            Valor 1: <input type="text" name="txtvalor1" value=" <?=$valor1;?>" size="20">
                            <br> 
                            Valor 2: <input type="text" name="txtvalor2" value=" <?=$valor2;?>" size="20">
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
                            <input type="submit" name="btnCalcular" value="Calcular">
                        </div>
                        <div id="resultado">
                            <h1><?=round($resultado, "2")?></h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</head>