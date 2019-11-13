<?php
    $resultado = null;
    $campovazio = null;
    $caracterinvalido = null;

    if (isset($_GET['btnCalcular'])) {
        if (!(empty($_GET['txtvalor1']) || empty($_GET['txtvalor2']))) {
            if (is_numeric($_GET['txtvalor1']) && is_numeric($_GET['txtvalor2'])) {
             $valor1 = $_GET['txtvalor1'];
             $valor2 = $_GET['txtvalor2'];
             $conta = $_GET['rdoopcoes'];  
                
             if($conta == "somar") {
                 $resultado = $valor1 + $valor2;
             } else if ($conta == "subtrair") {
                 $resultado = $valor1 - $valor2;
             } else if ($conta == "multiplicar") {
                $resultado = $valor1 * $valor2;
             } else {
                 $resultado = $valor1 / $valor2;
             }
                
            } else {
                echo("Apenas números são permitidos!");
            }
        } else {
            echo("Alguns campos não foram preenchidos!");
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
                    <form name="frmformulario" method="get" action="calculadora.php">
                        <div id="valores">
                            Valor 1: <input type="text" name="txtvalor1" value="" size="20">
                            <br>
                            Valor 2: <input type="text" name="txtvalor2" value="" size="20">
                        </div>
                        <div id="opcoes">
                            <input type="radio" name="rdoopcoes" value="somar"> Somar
                            <br>
                            <input type="radio" name="rdoopcoes" value="subtrair"> Subtrair
                            <br>
                            <input type="radio" name="rdoopcoes" value="multiplicar"> Multiplicar
                            <br>
                            <input type="radio" name="rdoopcoes" value="dividir"> Dividir
                            <br>
                            <input type="submit" name="btnCalcular" value="Calcular">
                        </div>
                        <div id="resultado">
                            <h1><?=$resultado?></h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</head>