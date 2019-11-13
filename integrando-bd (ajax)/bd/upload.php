<?php

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

                    session_start();
                    $_SESSION['previewFoto'] = $foto;
                    
                    echo("<img src='bd/arquivos/".$foto."' id=''>");
    
                } else{
                    
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

    } else{
        echo("<script> alert('Imagem maior do que o tamanho permitido!'); </script>");
    }

?>