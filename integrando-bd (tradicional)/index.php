<?php
    if (!isset($_SESSION))
        session_start();// Ativa o recurso de variáveis de sessão no servidor

    /* 
        Criar uma variável de sessão
            $_SESSION['nome']
            
        PARA APAGAR UMA VARIÁVEL DE SESSÃO DO SERVIDOR.
        
            unset($_SESSION['nome'])
            
        PARA ELIMINAR TODAS AS VARIAVEIS DE SESSÃO DO SISTEMA AUTOMATICAMENTE
        
            session_destroy()
    
    */

    /* Declaração de variáveis */
    $nome = "";
    $telefone = "";
    $celular = "";
    $email = "";
    $dataConvertida = "";
    $codEstado = (int) 0;
    $siglaEstado = (string) "";
    $sexo = "";
    $obs = "";
    $chkMasculino = "";
    $chkFeminino = "";
    $foto = (string) "";
    $botao = "Inserir";

    // Import do arquivo de conexão
    require_once('bd/conexao.php');

    // Chamada para function de conexão com o MySql
    $conexao = conexaoMysql();

    // Verificando existência da variável codigo.
    if (isset($_GET['codigo']))
    {
        // Verifica se o modo é editar.
        if ($_GET['modo'] == "editar")
        {   
            $codigo = $_GET['codigo'];
            
            // Criamos uma variável de sessão para enviar o código 
            // do registro para   outra página.
            $_SESSION['codigo'] = $codigo;
            
            $sql = "select tblcontatos.*,
                    tblestados.sigla
                    from tblcontatos inner join tblestados
                    on tblestados.codigo = tblcontatos.codestado
                    where tblcontatos.codigo = ".$codigo;

            $contato = mysqli_query($conexao, $sql);
            
            // Verifica se encontrou no banco.
            if($contatoB = mysqli_fetch_array($contato))
            {
                
                $nome = $contatoB['nome'];
                $telefone = $contatoB['telefone'];
                $celular = $contatoB['celular'];
                $email = $contatoB['email'];

                $dataPadraoAmericano = explode("-", $contatoB['dt_nasc']);
                $dataConvertida = $dataPadraoAmericano[2]. "/". $dataPadraoAmericano[1]. "/". $dataPadraoAmericano[0];
                
                $codEstado = $contatoB['codestado'];
                $siglaEstado = $contatoB['sigla'];

                $sexo = $contatoB['sexo'];

                if($sexo == "m") {
                    $chkMasculino = "checked";
                }
                else{
                    $chkFeminino = "checked";
                }
                
                $foto = $contatoB['foto'];
                $_SESSION['nomeFoto'] = $foto;
                $obs = $contatoB['obs'];
                $botao = "Editar";
            }
        }
    }
    
    
 
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Integrando com Banco de Dados</title>
        <script src="js/jquery.js"></script>
        <script src="js/modulo.js"></script>
        
        <script>
            $(document).ready(function(){
                
                // Function para abrir a modal
                $('.visualizar').click(function(){
                     $('#container').fadeIn(1000);
                })
                
                // Fechar a modal
                $('#fechar').click(function(){
                    $('#container').fadeOut(1000);
                });
                
            });
            
            function visualizarDados(idItem)
            {
                $.ajax({
                   type: "POST",
                    url: "modalContatos.php",
                    data: {modo:'visualizar', codigo:idItem},
                    success: function(dados){
                        $('#modalDados').html(dados);
                    }
                });
            }
        </script>
        
    </head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <body>
        
        <!-- 
            Construir a modal que irá receber os dados
            de outro arquivo, através do javascript.
        -->
        <div id="container">
            <div id="modal">
                <div id="fechar">Fechar</div>
                <div id="modalDados">
                    
                </div>
            </div>
        </div>
        
        <section id="cadastro_contatos">
            <div id="titulo">
                <h1>Cadastro de Contatos</h1>
            </div>
            <div class="campo_de_cadastro">
                
                <!--

                    HTML 5
                    required - Faz com que a caixa seja obrigatoriamente preenchida.
    
                    type="text"
                         "email"
                         "tel"
                         "number" (min" " max" ")
                         "range"
                         "url"
                         "password"
                         "date"
                         "month"
                         "week"
                         "color"

                    Pattern - Permite criar uma máscara para a entrada de dados no formulário

                    
                -->
            
                <!-- 
                    Obs: Para o upload de arquivo funcionar, devemos utilizar as seguintes opções:
                    
                    method = "post";

                    enctype = "multipart/form-data" -- Informa o tipo de dado a ser retirado.
                -->
                <form name="frmformulario" method="post" action="bd/salvar.php" enctype="multipart/form-data">
                    <div class="campo">
                        <div class="nome_do_campo">
                            Nome: 
                        </div>
                        <div class="input_do_campo">
                            <input type="text" name="txtnome" value="<?=$nome?>" maxlength="100" size="28" placeholder="Digite seu nome" onkeypress="return validarEntrada(event, 'number');" required>
                        </div>
                    </div>
                    <div class="campo">
                        <div class="nome_do_campo">
                            Telefone
                        </div>
                        <div class="input_do_campo">
                            <input type="text" name="txttelefone" value="<?=$telefone?>" maxlength="100" size="28" onkeypress="return mascaraFone(this, event);" required id="oi">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="nome_do_campo">
                            Celular: 
                        </div>
                        <div class="input_do_campo">
                            <input type="text" name="txtcelular" value="<?=$celular?>" maxlength="100" size="28" onkeypress="" required>
                        </div>
                    </div>
                    <div class="campo">
                        <div class="nome_do_campo">
                            Email: 
                        </div> 
                        <div class="input_do_campo">
                            <input type="email" name="txtemail" value="<?=$email?>" maxlength="100" size="28" required>
                        </div>
                    </div>
                    <div class="campo">
                        <div class="nome_do_campo" id="data_nasc">
                            Data Nascimento: 
                        </div>
                        <div class="input_do_campo">
                            <input type="text" name="txtnascimento" value="<?=$dataConvertida?>" maxlength="100" size="28" required>
                        </div>
                    </div>
                    <div class="campo">
                        <div class="nome_do_campo">
                            Foto: 
                        </div>
                        <div class="input_do_campo">
                            <input type="file" name="flefoto">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="nome_do_campo">
                            Estado: 
                        </div>
                        <div class="input_do_campo" id="campo_input">
                            <select name="sltestados" id="select_estados">
                                <?php
                                    if($_GET['modo'] == 'editar'){
                                ?>
                                    <option value="<?=$codEstado;?>"><?=$siglaEstado?></option>
                                <?php
                                    }else {
                                ?>
                                    <option value="">Selecione um estado</option>
                                <?php 
                                    }
                                    $sql = 'SELECT * FROM tblestados where codigo <> '.$codEstado;
                                       
                                    $select = mysqli_query($conexao, $sql);
                                   
                                    while($rsEstados = mysqli_fetch_array($select))
                                    {
                                ?>
                                
                                <option value="<?=$rsEstados['codigo'];?>">
                                    <?=$rsEstados['sigla'];?>
                                </option>
                                
                                <?php
                                    } 
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="campo">
                        <div class="nome_do_campo">
                            Sexo: 
                        </div>
                        <div class="input_do_campo">
                            <input type="radio" name="rdosexo" value="f" <?=$chkFeminino?> required> Feminino
                            <input type="radio" name="rdosexo" value="m" <?=$chkMasculino?> required> Masculino
                        </div>
                    </div>
                    <div class="campo" id="campoobs">
                        <div class="nome_do_campo" id="campo_obs">
                            Obs: 
                        </div>
                        <div class="input_do_campo" id="campo_input">
                            <textarea name="obs" rows="6"  cols="30" id="textarea_campo_obs" required><?=$obs?></textarea>
                        </div>
                    </div>
                    <div id="foto">
                        <img src="bd/arquivos/<?=$foto?>" id="foto_edit">
                    </div>
                    <div id="botao_salvar">
                        <input type="submit" name="btnsalvar" value="<?=$botao?>">
                    </div>
                </form>
            </div>
        </section>
        <section id="consulta_contatos">
            <div id="titulo2">
                <h1>Consulta a Contatos</h1>
            </div>
            <div id="consulta_campos">
                <div class="nome_campos_consulta">
                    Nome
                </div>
                <div class="nome_campos_consulta">
                    Telefone
                </div>
                <div class="nome_campos_consulta">
                    Celular
                </div>
                <div class="nome_campos_consulta">
                    Email
                </div>
                <div class="nome_campos_consulta">
                    Estado
                </div>
                <div class="nome_campos_consulta">
                    Fotos
                </div>
                <div class="nome_campos_consulta">
                    Outros
                </div>
            </div>
            
            <?php 
            
                $sql = "select tblcontatos.*,
                tblestados.sigla,
                tblestados.descricao from tblcontatos inner join tblestados on tblestados.codigo = tblcontatos.codestado";
                $select = mysqli_query($conexao, $sql);
            
                /* 
                Exemplos de funções que convertem a resposta d banco em um formato de dados para manipulação
                
                    mysqli_fetch_array()
                    mysqli_fetch_assoc()
                    mysqli_fetch_object()
                    
                */
            
                while ($rsContatos = mysqli_fetch_array($select))
                {
                    
            ?>
            <div id="consulta_respostas">
                <div class="campo_respostas">
                    <?=$rsContatos['nome']?>
                </div>
                <div class="campo_respostas">
                    <?=$rsContatos['telefone']?>
                </div>
                <div class="campo_respostas">
                    <?=$rsContatos['celular']?>
                </div>
                <div class="campo_respostas">
                    <?=$rsContatos['email']?>
                </div>
                <div class="campo_respostas">
                    <?=$rsContatos['sigla']." - ".$rsContatos['descricao'];?>
                </div>
                <div class="campo_respostas">
                    <img src="bd/arquivos/<?=$rsContatos['foto']?>" class="foto_banco">
                </div>
                <div class="campo_respostas">
                    <div class="icon">
                        <a href="index.php?modo=editar&codigo=<?=$rsContatos['codigo']?>">
                            <img src="icons/editar.png">
                        </a>
                    </div>
                    <div class="icon">
                        <a onclick="return confirm('Deseja realmente excluir esse registro?')" href="bd/deletar.php?modo=excluir&codigo=<?=$rsContatos['codigo']?>&nomeFoto=<?=$rsContatos['fotos'];?>">
                            <img src="icons/claro.png" id="delete" onclick="">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#" class="visualizar" onclick="visualizarDados(<?=$rsContatos['codigo']?>);">
                            <img src="icons/procurar.png">
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </section>
    </body>
</html>