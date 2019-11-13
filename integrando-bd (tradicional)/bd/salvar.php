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
        
        if(strtoupper($_POST['btnsalvar']) == "EDITAR" && $_FILES['flefoto']['name'] == "")
        {
            
            $sql = "update tblcontatos set
                    nome = '".$nome."', telefone = '".$telefone."', celular = '".$celular."', 
                    email = '".$email."', sexo = '".$sexo."', dt_nasc = '".$dataNasci."',
                    obs = '".$obs."', codestado = ".$codestado." where codigo = ".$_SESSION['codigo'];
            
            if(mysqli_query($conexao, $sql))
                header('location:../index.php');
            else
                echo("Erro ao executar o script no banco");
            
        } else
        {
        
            // Verifica se a imagem foi enviada pelo apache.
            if($_FILES['flefoto']['size'] > 0 && $_FILES['flefoto']['type'] != "")
            {

            // Guarda o tamanho do arquivo a ser upado para o servidor.
            $arquivo_size = $_FILES['flefoto']['size'];

            // Converte o tamanho do arquivo para Kbyte e pega somente a parte inteira da conversão (round).
            $tamanho_arquivo = round($arquivo_size / 1024);

            $arquivos_permitidos = array("image/jpeg", "image/jpg", "image/png");

            // Guarda o tipo de extensão do arquivo a ser upado para o servidor.
            $ext_arquivo = $_FILES['flefoto']['type'];

                if(in_array($ext_arquivo, $arquivos_permitidos))
                {

                    // Restrigindo o tamanho de arquivo.
                    if ($tamanho_arquivo < 2000) 
                    {

                        // Permite retornar apenas o nome do arquivo.
                        // pathinfo(var, PATHINFO_NAME)
                        $nome_arquivo = pathinfo($_FILES['flefoto']['name'], PATHINFO_FILENAME);

                        // Permite retornar apenas a extensão do arquivo.
                        // pathinfo(var, PATHINFO_EXTENSIO)
                        $ext = pathinfo($_FILES['flefoto']['name'], PATHINFO_EXTENSION);

                        // No PHP podemos usar dois algorítmos de criptografia 
                        // (MD5, SHA1, hash(tipo do algoritmo, variavel)

                        // Estamos gerando uma chave com o nome do arquivo + uniqid(time()).
                        $nome_arquivo_cripty = md5(uniqid(time()).$nome_arquivo);

                        $foto = $nome_arquivo_cripty.".".$ext;

                        $arquivo_temp = $_FILES['flefoto']['tmp_name'];

                        $diretorio = "arquivos/";

                        if(move_uploaded_file($arquivo_temp, $diretorio.$foto))
                        {

                            // Verifica se o valor do btnsalvar é inserir
                            if(strtoupper($_POST['btnsalvar']) == "INSERIR"){

                                $sql = "insert into tblcontatos (nome, telefone, celular, email, sexo, dt_nasc, obs, codestado, foto)
                                    values ('".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$sexo."', '".$dataNasci."', '". $obs."', ".$codestado.", '".$foto."')";

                            }

                             // Verifica se o valor do btnsalvar é editar
                            elseif(strtoupper($_POST['btnsalvar']) == "EDITAR") 
                                
                                $sql = "update tblcontatos set
                                    nome = '".$nome."', telefone = '".$telefone."', celular = '".$celular."', email = '".$email."', sexo = '".$sexo."', dt_nasc = '".$dataNasci."', obs = '".$obs."', codestado = ".$codestado.", foto = '".$foto."'  where codigo = ".$_SESSION['codigo'];

                            // Executa um script no banco de dados. (Se o script der certo, iremos redirecionar para a página de cadastro, senão mostraremos mensagem de erro).
                            if(mysqli_query($conexao, $sql))
                            {
                                // Tratamento para apagar a foto antiga do servidor, caso seja modo de editar.
                                if(isset($_SESSION['nomeFoto']))
                                {
                                    unlink("arquivos/".$_SESSION['nomeFoto']);
                                    unset($_SESSION['nomeFoto']);
                                }
                                header('location:../index.php');
                            }
                            else
                                echo("Erro ao executar o script no banco");

                        }

                    }else{
                        echo("<script> 
                                alert('Tamanho de Arquivo não pode ser maior do que 2Mb');
                              </script>");
                    }

                } else{
                    echo("<script>
                            alert('Tipo de arquivo não pode ser upado para o servidor (arquivos permitidos .jpg, .png, .jpeg)'); 
                        </script>");
                }

            } else {
                echo("<script> alert('Imagem maior do que o tamanho permitido!'); </script>");
            }
            
        }
        
    }

?>