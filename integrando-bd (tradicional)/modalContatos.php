<?php 

    // Verifica se existe a variável modo
    if(isset($_POST['modo']))
    {   
        // Valida se o conteúdo da variável modo é visualizar.
        if(strtoupper($_POST['modo']) == 'VISUALIZAR')
        {
            // Recebe o id do registro enviado pelo AJAX.
            $codigo = $_POST['codigo'];
            
            // Import do arquivo de conexão
            require_once('bd/conexao.php');

            // Chamada para function de conexão com o MySql
            $conexao = conexaoMysql();
            
            // Script para buscar o registro no banco de dados.
            $sql = "select tblcontatos.*, tblestados.sigla from tblcontatos inner join tblestados on tblestados.codigo = tblcontatos.codestado where tblcontatos.codigo = ".$codigo;
            
            // Executa o script no banco de dados.
            $select = mysqli_query($conexao, $sql);     
            
            // Verifica se existem dados, e converte em array
            if ($rsVisualizar = mysqli_fetch_array($select))
            {
                $nome = $rsVisualizar['nome'];
                $telefone = $rsVisualizar['telefone'];
                $celular = $rsVisualizar['celular'];
                $email = $rsVisualizar['email'];
                $dt_nasc = $rsVisualizar['dt_nasc'];
                $sexo = $rsVisualizar['sexo'];
                $obs = $rsVisualizar['obs'];
                $estado = $rsVisualizar['sigla'];
            }
        }
    }

?>

<hmtl>
    <head>
        <title>
           modalContatos
        </title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>
                    Nome: 
                </td>
                <td>
                    <?=$nome?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefone:
                </td>
                <td>
                    <?=$telefone?>
                </td>
            </tr>
            <tr>
                <td>
                    Celular:
                </td>
                <td>
                    <?=$celular?>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?=$email?>
                </td>
            </tr>
            <tr>
                <td>
                    Sexo: 
                </td>
                <td>
                    <?=$sexo?>
                </td>
            </tr>
            <tr>
                <td>
                    Data de nascimento
                </td>
                <td>
                    <?=$dt_nasc?>
                </td>
            </tr>
            <tr>
                <td>
                    Observação:
                </td>
                <td>
                    <?=$obs?>
                </td>
            </tr>
            <tr>
                <td>
                    Estado:
                </td>
                <td>
                    <?=$estado?>
                </td>
            </tr>
            
        </table>
        
    </body>
</hmtl>





















