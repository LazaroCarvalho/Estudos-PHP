<?php 

    // Criando uma constante!
    define("ERRO_CAIXA_VAZIA", "Alguns campos não foram preenchidos!");
    define("ERRO_CARACTER_INVALIDO", "Apenas números serão aceitos!");

    function calcular($valor1, $valor2, $conta){
        
        // Variáveis declaradas como globais para serem usadas fora da function.
        global $chkSomar;
        global $chkSomar;
        global $chkMultiplicar;
        global $chkDividir;
        
        switch($conta) {
            case "somar":
                $resultado = $valor1 + $valor2;
                $chkSomar = "checked";
                break;
            case "subtrair":
                $resultado = $valor1 - $valor2;
                $chkSomar = "checked";
                break;
            case "multiplicar":
                $resultado = $valor1 * $valor2;
                $chkMultiplicar = "checked";
                break;
            case "dividir":
                $resultado = $valor1 / $valor2;
                $chkDividir = "checked";
                break;
        }
        
        return $resultado;
    }


?>