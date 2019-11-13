<?php 
    // Valida se a variável de sessão já foi iniciada.
    if (!isset($_SESSION))
        session_start();

    // Verifica se houve a ação de POST pelo formulário
    if(isset($_POST['btnsalvar']))
    {
        
        require_once('conexao.php');
        $conexao = conexaoMysql();
        
        // Resgatando os dados enviados pelo formulário
        $nome = $_POST['txtnome'];
        $telefone = $_POST['txttelefone'];
        $celular = $_POST['txtcelular'];
        $email = $_POST['txtemail'];
        $codestado = $_POST['sltestados'];
        
        // explode() - Retorna uma array com elementos formados a partir da subdivisão dela por um caractér coringa.
        $dataNasci = explode("/", $_POST['txtnascimento']);
        $dataNasci = $dataNasci[2]. "-". $dataNasci[1]. "-". $dataNasci[0];
        $sexo = $_POST['rdosexo'];
        $obs = $_POST['obs'];
        
        // Tratamento para verificar se o usuário realmente fez o upload de um arquivo.
        if(isset($_SESSION['previewFoto']))
            $foto = $_SESSION['previewFoto'];
        else
            $foto = null;
        
        if(strtoupper($_POST['btnsalvar']) == "EDITAR")
            
            $sql = "update tblcontatos set
                    nome = '".$nome."', telefone = '".$telefone."', celular = '".$celular."', 
                    email = '".$email."', sexo = '".$sexo."', dt_nasc = '".$dataNasci."',
                    obs = '".$obs."', codestado = ".$codestado." where codigo = ".$_SESSION['codigo'];
        
        elseif (strtoupper($_POST['btnsalvar']) == "INSERIR")
            
            $sql = "INSERT INTO tblcontatos (nome, telefone, celular, email, sexo, dt_nasc, obs, codestado, foto)
                    VALUES ('".$nome."', '".$telefone."',
                    '".$celular."', '".$email."', 
                    '".$sexo."', '".$dataNasci."',
                    '".$obs."', ".$codestado.",
                    '".$foto."')";
        
        if(mysqli_query($conexao, $sql))
        {
            
            if(isset($_SESSION['nomeFoto']))
            {
                unlink('arquivos/'.$_SESSION['nomeFoto']);
                unset($_SESSION['nomeFoto']);
            }
            
            if(isset($_SESSION['nomeFoto']))
                unset($_SESSION['nomeFoto']);
            
            header("location: ../index.php");
            
        }
        
    }

?>