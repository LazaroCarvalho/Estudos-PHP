<?php 

    // Funções

    // Função para efetuar um cálculo entre dois números a partir de uma operação passada como parâmetro ($conta).
    function calcular($valor1, $valor2, $conta){
        
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

    // Função para efetuar um cálculo entre dois números a partir de uma operação passada como parâmetro, porém utilizando IF, ao invés de Switch.
    function calcularIf($valor1, $valor2, $conta)
    {
        global $chkSomar;
        global $chkSomar;
        global $chkMultiplicar;
        global $chkDividir;
        
        if($conta == "somar")
        {
            $resultado = $valor1 + $valor2;
            $chkSomar = "checked";
        } else if ($conta == "subtrair") 
        {
            $resultado = $valor1 - $valor2;
            $chkSubtrair = "checked";
        } else if ($conta == "multiplicar")
        {
            $resultado = $valor1 * $valor2;
            $chkMultiplicar = "checked";
        } else if ($conta == "dividir")
        {
            $resultado = $valor1 / $valor2;
            $chkDividir = "checked";
         }
        
        return $resultado;
        
    }

    // Função para calcular a média apartir de 4 valores inseridos como parâmetros.
    function calcularMedia($valor1, $valor2, $valor3, $valor4)
    {
        $resultado = ($valor1 + $valor2 + $valor3 + $valor4) / 4;
        
        return $resultado;
    }

    // Função para calcular a tabuada de um número ($tabuada) até o valor inserido pelo usuário ($contador).
    function tabuada($tabuada, $contador)
    {
        $resultado = 0;
        $retorno = (string) "";
        for ($i = 0; $i <= $contador; $i++)
        {
            $resultado = $tabuada * $i;
            $retorno .= $tabuada. " x ". $i. " = ". $resultado. "<br>";
        }
        
        return $retorno;
    }

?>
















