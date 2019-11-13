<?php 

// Verifíca a existência da variável modo.
if (isset($_GET['modo']))
{
    // Valida se a variável modo tem a ação de excluir
    if ($_GET['modo'] == "excluir") 
    {
        // Importa o arquivo de conexão com BD
        require_once('conexao.php');
        // Abre a conexão com o BD Mysql
        $conexao = conexaoMysql();
        
        $codigo = $_GET['codigo'];
        $nomeFoto = $_GET['nomeFoto'];
        
        $sql = "delete from tblcontatos where codigo = ". $codigo;
        
        if (mysqli_query($conexao, $sql))
        {
            // Apaga um arquivo.
            unlink('arquivos/'.$nomeFoto);
            header('location:../index.php');
        }
        else
            echo("Erro ao deletar registro");
    }
    
}

?>