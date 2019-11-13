<!-- PHP -->
<?php

//Criamos essa variável para existir na abertura da tela, evitando um erro por variável indefinida.
$media = 0;
$erroinsercao = null;
$statusaluno = null;
    #Comentário
    // Comentário
    /*
        Comentários em Bloco
    */

/* 
    $_GET[] - Resgata um valor enviado pelo formulário via get.
    S_POST[] - resgata um valor enviado pelo formulário via post.
    
    isset() - Verifica se existe o elemento, variável, objeto, etc...
*/

if(isset($_GET['btncalcular']))
{
   // Resgatando os valores digitados no formulário.
    $nota1 = $_GET['txtnota1'];
    $nota2 = $_GET['txtnota2'];
    $nota3 = $_GET['txtnota3'];
    $nota4 = $_GET['txtnota4']; 
    
    if ($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == "")
    {
        echo("Alguns campos não foram preenchidos!");
    } else 
    {
        if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)) 
        {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
            if($media < 5) 
            {
                $statusaluno = "Aluno reprovado!";
            } else if (media <= 7.5)
            {
                $statusaluno = "Aluno em recuperação!";
            }
            else {
                $statusaluno = "Aluno aprovado!";
            }
            
            /*
                Para exibir dados na tela, podemos usar
                echo()
                print_r()

                MUITO importante!
                var_dump() - exibe o conteúdo da variável e suas informações técnicas ( tipo de dados, qtde de espaço usado).
            */
            
        } else {
            // echo("<span style='color: red;'> Apenas números serão aceitos! </span>");
            $erroinsercao = "Apenas números serão aceitos!";
        }
    }
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html>
    <head>
        <title>Calculo de Médias</title>
    </head>
    <style>
        
        #formulario {
            width: 600px;
            height: 520px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            border: 2px solid;
            border-color: black;
        }
        
        #titulo {
            height: 150px;
            width: 100%;
            text-align: center;
            color: white;
            background-color: black;
            padding-top: 30px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        #resposta {
            height: 70px;
            width: 100%;
            text-align: center;
            background-color: skyblue;
            color: black;
            padding-top: 21px;
            box-sizing: border-box;
            font-weight: bolder;
            font-size: 22px;
        }
        
        #oformulario {
            height: 300px;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            padding-top: 70px;
            box-sizing: border-box;
            text-align: center
        }
        
        #oformulario input{
            margin-bottom: 20px;
        }
        
        #calcular{
            width: 50px;
            height: 50px;
            margin-left: auto;
            margin-right: auto;
        }
        
    </style>
    <body>
        <div id="formulario">
            <div id="titulo">
                <h1>Calculo de Média</h1>
            </div>
            <div id="oformulario">
                <form name="frmformulario" method="get" action="exercicio1.php">
                    Nota 1: <input type="text" name="txtnota1" maxlength="3" size="25" value="<?php echo (@$nota1); ?>">
                    <br>

                    Nota 2: <input type="text" name="txtnota2" maxlength="3" size="25" value="<?php echo (@$nota1); ?>">
                    <br>

                    Nota 3: <input type="text" name="txtnota3"
                    size="25" maxlength="3" value="<?=@$nota3 ?>">
                    <br>

                    Nota 4: <input type="text" name="txtnota4" size="25" maxlength="3" value="<?=@$nota4 ?>">
                    <br>    
                    
                    <div id="calcular">
                        <input type="submit" name="btncalcular" value="Calcular">
                    </div>
                </form>
                <?=$erroinsercao?>
            </div> 
            <div id="resposta">
                <?=$statusaluno?> A média é: <?php echo($media); ?>
            </div>
        </div>
    </body>
</html>