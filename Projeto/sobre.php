<?php 
    require_once('modulos/header.php');
    require_once('modulos/footer.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/header.js"></script>    
        <title>Delícia Gelada - Sobre nós</title>
    </head>
    <body>
        
        <!-- CABEÇALHO -->
        <header class="cabecalho bkg_transparente" id="cabeca">
            <div class='conteudo center'>
                <div id='caixa_logo'>

                </div>

                <!-- MENU -->
                <nav id='caixa_menu'>
                    <ul id='menu' class='center'>
                        <li class='menu_itens'><a href='index.php'>Home</a></li>
                        <li class='menu_itens'><a href='curiosidades.php'>Curiosidades</a></li>
                        <li class='menu_itens'>
                            <a href='sobre.php'>Sobre nós</a>
                        </li>
                        <li class='menu_itens'>
                            <a href='lojas.php'>Lojas</a>
                        </li>
                        <li class='menu_itens'>
                            <a href='promocoes.php'>Promoções</a>
                        </li>
                        <li class='menu_itens'>
                            <a href='contatos.php'>Contatos</a>
                        </li>
                        <li class='menu_itens'>
                            <a href='destaques.php'>Destaques</a>
                        </li>
                    </ul>
                </nav>

                <!-- Formulário de login -->
                    <div id='container_login'>
                    <div id='login_txt'>
                        Login 
                        <div id="seta_branca">
                            <img alt="seta" src="icons/sobre/arrow-24-16.png" >
                        </div>
                    </div>
                    <div class='bkg_preto' id='caixa_login'>
                        <div class='bkg_preto' id='form_container'>
                            <form name='frmformulario' method='post' action='cms/home.php'>
                                <div class='form_login'>
                                    Usuario: <br>
                                    <input type='text' class='input_form_login'>
                                </div>
                                <div class='form_login'>
                                    Senha: <br>
                                    <input type='text' class='input_form_login'>
                                </div>
                                <a href="cms/home.php">
                                    <input type='submit' id='botao_submit' value='OK'>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Imagem principal da página e título -->
        <section id="sobre_nos">
            <div id="vidro">
                <div class="conteudo center">
                    <div class="titulo_sobre center" id="nome_site">
                        <h1>Delicia Gelada</h1>
                    </div>
                    <div class="titulo_sobre center" id="titulo_sobre_2">
                        <h2>Saiba mais sobre nós</h2>
                    </div>
                    <div id="buttom_seta" class="center">
                        <a href="#safras" class="ancora">
                            <img alt="seta" src="icons/sobre/play-button.png">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Qualidades da empresa -->
        <section id="safras">
            <div id="safras_pelicula">
                <div class="conteudo center">
                    <div class="sobre_titulos center">
                        <h1>As frutas vêm das melhores safras</h1>
                    </div>
                    <div class="sobre_textos center">
                        <p>Além de todo cuidado com a produção dos sucos, temos também todo o cuidado em selecionar as melhores frutas para produzi-los. Para isso, contamos com as melhores safras, produzindo sucos de qualidade com frutas de qualidade!</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Alcance da Empresa -->
        <section id="alcance">
            <div class="conteudo center">
                <div id="alcance_imagem">
                    
                </div>
                <div id="alcance_titulo">
                    <h1 id="alcance_titulo_form">Alcance em todo o território nacional.</h1>
                    <p id="alcance_text_form">Atendemos demandas em todo o território nacional, cumprindo prazos e fornecendo produtos de qualidade para todos os estados brasileiros.</p>
                </div>
            </div>
        </section>
        
        <!-- RODA-PÉ -->
        <footer>
            <?=$footer?>
        </footer>
        <script src="js/login.js"></script>
        
        <!-- Script para animação da Âncora, ao clicar na seta da imagem principal. -->
        <script>
            jQuery(document).ready(function($) {
                $(".ancora").click(function(event){       
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
                });
            });
        </script>
    </body>
</html>