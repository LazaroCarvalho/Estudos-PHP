<?php 

    require_once('modulos/header.php');
    require_once('modulos/footer.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
        <script src="js/contatos/tratamento.js"></script>
        <meta charset="utf-8">
        <title>Contatos - Delícia Gelada</title>
    </head>
    <body>
        
        <!-- CABEÇALHO -->
        <div class="cabecalho">
            <?=$header?>
        </div>
        <div class="ocupa_cabecalho">
        
        </div>
        
        <!-- TABELA DE ENVIO DE MENSAGENS -->
        <section id="container_contatos">
            <div class="conteudo center">
                <div id="contatos_tabela">
                    <form name="frmformulario" action="bd/inserir.php" method="post">
                        <div id="contatos_informacoes_esquerda">
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Nome:
                                </div>
                                <div class="campo_input">
                                    <input type="text" class="input_contatos" name="txtnome" placeholder="Digite seu nome" onkeypress="return validarEntrada(event, 'number')" required>
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Telefone:
                                </div>
                                <div class="campo_input">
                                    <input type="text" class="input_contatos" name="txttelefone" id="campo_telefone" onkeypress="return mascaraFone(this, event, 'telefone')" placeholder="(011) 8988-8888">
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Celular:
                                </div>
                                <div class="campo_input">
                                    <input type="text" class="input_contatos" name="txtcelular" id="campo_celular" onkeypress="return mascaraFone(this, event, 'celular')" placeholder="(011) 99393-9393" required>
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Email:
                                </div>
                                <div class="campo_input">
                                    <input type="email" class="input_contatos" name="txtemail" required>
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Home Page:
                                </div>
                                <div class="campo_input">
                                    <input type="url" class="input_contatos" name="txthomepage">
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Facebook:
                                </div>
                                <div class="campo_input">
                                    <input type="url" class="input_contatos" name="txtfacebook">
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Tipo de mensagem:
                                </div>
                                <div class="campo_input" id="campo_tipo_mensagem">
                                    <div class="radio_mensagem">
                                        <input name="rdotipo_mensagem" type="radio" class="contatos_radio" id="rdosugestao" value="s" required>Sugestão
                                    </div>
                                    <div class="radio_mensagem">
                                        <input name="rdotipo_mensagem" type="radio" class="contatos_radio" value="c" id="rdomensagem" required>Crítica
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contatos_informacoes_direita">
                            <div class="tabela_campo_textarea center">
                                <div class="campo_nome">
                                    Mensagem:
                                </div>
                                <div class="campo_input">
                                    <textarea class="input_contatos_textarea" name="txtmensagem" required></textarea>
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Sexo:
                                </div>
                                <div id="radio_input">
                                    <div class="radio">
                                        <input name="rdosexo" type="radio" class="contatos_radio" id="rdofeminino" value="f" required>Feminino
                                    </div>
                                    <div class="radio">
                                        <input name="rdosexo" type="radio" class="contatos_radio" value="m" required>Masculino
                                    </div>
                                </div>
                            </div>
                            <div class="tabela_campo center">
                                <div class="campo_nome">
                                    Profissão:
                                </div>
                                <div class="campo_input">
                                    <input type="text" class="input_contatos" name="txtprofissao" required>
                                </div>
                            </div>
                            <div class="center" id="container_botao_contatos">
                                <input type="submit" name="btnsalvar" value="Enviar" id="botao_contatos">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Título -->
                <div id="titulo_contatos">
                    <h1 id="contatos_titulo">Entre em contato conosco!</h1>
                    <p id="contatos_texto">
                        Você tem alguma idéia, sugestão ou crítica construtiva? Então entre em contato conosco pelo formulário ao lado!  
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer>
            <?=$footer?>
        </footer>
        <script src="js/login.js"></script>
    </body>
</html>