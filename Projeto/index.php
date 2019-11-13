<?php 

    require_once('modulos/header.php');
    require_once('modulos/footer.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>
           Delícia Gelada - HOME 
        </title>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.7.2.min.js"></script>
    </head>
    <body>
    
        <!-- CABEÇALHO -->
        <header class="cabecalho">
            <?=$header?>
        </header>
        <div class="ocupa_cabecalho">
        
        </div>
        
        <!-- SLIDE -->
        <!-- Slideshow container -->
        <section id="slide">
            <h1 style="display:none;">a</h1>
            <div class="conteudo center">
                <div class="slideshow-container">

                  <!-- Full-width images with number and caption text -->
                  <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="slide-image" alt="Suco slide" title="Suco slide" src="imagens/slides/imagem2.jpg" style="width:100%">
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img class="slide-image" alt="Suco slide" title="Suco slide" src="imagens/slides/imagem1.jpg" style="width:100%">
                  </div>

                  <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="slide-image" alt="Suco slide" title="Suco slide" src="imagens/index/slide_img3.jpg" style="width:100%">
                  </div>

                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </div>
        </section>
        
        <!-- Seção de Produtos -->
        <section id="produtos">
            <h1 style="display:none;">a</h1>
            <div class="conteudo center">
                <!-- Filtro ao lado dos produtos -->
                <div id="filtro_navegacao">
                    <div class="filtro_navegacao_itens">
                        <div class="filtro_navegacao_text">
                            Sucos
                        </div>
                        <div class="filtro_navegacao_icon">
                            <img alt="seta" src="icons/index/arrow-30-16.png">
                        </div>
                    </div>
                    <div class="filtro_navegacao_itens">
                        <div class="filtro_navegacao_text">
                            Refrigerantes
                        </div>
                        <div class="filtro_navegacao_icon">
                            <img alt="seta" src="icons/index/arrow-30-16.png">
                        </div>
                    </div>
                </div>
                <!-- Lista de produtos -->
                <div id="lista_produtos">
                    <div class="produtos_itens">
                        <div class="produtos_itens_img">
                            <img alt="produto" src="imagens/index/produto1.jpg" class="produtos_imagens">
                        </div>
                        <div class="produtos_itens_carac">
                            Nome: Suco de Laraja
                        </div>
                        <div class="produtos_itens_carac">
                            Descrição: Suco Natural
                        </div>
                        <div class="produtos_itens_carac">
                            Preço: R$ 12,00
                        </div>
                    </div>
                    <div class="produtos_itens">
                        <div class="produtos_itens_img">
                            <img alt="produto" src="imagens/index/produto2.jpg" class="produtos_imagens">
                        </div>
                        <div class="produtos_itens_carac">
                            Nome: Cesta de Sucos
                        </div>
                        <div class="produtos_itens_carac">
                            Descrição: Sucos Yummy
                        </div>
                        <div class="produtos_itens_carac">
                            Preço: R$ 14,00
                        </div>
                    </div>
                    <div class="produtos_itens">
                        <div class="produtos_itens_img">
                            <img alt="produto" src="imagens/index/produto3.jpg" class="produtos_imagens">
                        </div>
                        <div class="produtos_itens_carac">
                            Nome: Suco Ateliê
                        </div>
                        <div class="produtos_itens_carac">
                            Descrição: Suco de maracujá
                        </div>
                        <div class="produtos_itens_carac">
                            Preço: R$ 8,00
                        </div>
                    </div><div class="produtos_itens">
                        <div class="produtos_itens_img">
                            <img alt="produto" src="imagens/index/produto4.jpg" class="produtos_imagens">
                        </div>
                        <div class="produtos_itens_carac">
                            Nome: Cesta de Sucos Juice
                        </div>
                        <div class="produtos_itens_carac">
                            Descrição: Sucos Big Juice
                        </div>
                        <div class="produtos_itens_carac">
                            Preço: R$ 16,00
                        </div>
                    </div>
                </div>
                <!-- Redes Sociais -->
                <div id="redes_sociais">
                    <div class="rede_social" id="facebook">
                        
                    </div>
                    <div class="rede_social" id="instagram">
                        
                    </div>
                    <div class="rede_social" id="twitter">
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Roda Pé -->
        <footer>
            <?=$footer?>    
        </footer>
        <script src="js/slide.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>













