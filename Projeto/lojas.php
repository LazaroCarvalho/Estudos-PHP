<?php 

    require_once('modulos/header.php');
    require_once('modulos/footer.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

        <title>Nossas Lojas - Delicia Gelada</title>
    </head>
    <body>
        
        <!-- Cabeçalho -->
        <div class="cabecalho">
            <?=$header?>
        </div>
        <div class="ocupa_cabecalho">
        
        </div>
        
        <!-- Apresentando a Página -->
        <section id="localize">
            <div class="conteudo center">
                <div class="center" id="localize_text">
                    <div id="localize_imagem">
                        
                    </div>
                    <div class="localize_texto">
                        <h1 id="localize_titulo">
                            Localize a loja mais próxima de você!
                        </h1>
                        <p class="localize_texto">
                            Temos lojas em diversas regiões!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Lista de lojas -->
        <section id="lista_lojas">
            <h1 style="display: none;">a</h1>
            <div class="conteudo center">
                <div class="center" id="container_lojas">
                    <!-- Cards de cada Produto --> 
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="loja" class="card_imagens" src="imagens/lojas/loja1.jpg">
                        </div>
                        <div class="card_info center"> 
                            <p class="cards_info">Rua: Av. Rio Branco 3760 </p>
                            <p class="cards_info">Cidade: Juíz de Fora</p>
                            <p class="cards_info">Estado: Minas Gerais</p>
                            <p class="cards_info">Telefone: (011) 8577-3226</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="loja" class="card_imagens" src="imagens/lojas/loja2.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Rua: Rua Canal de Suez 337</p>
                            <p class="cards_info">Cidade: Barueri</p>
                            <p class="cards_info">Estado: São Paulo</p>
                            <p class="cards_info">Telefone: (011) 4322-3122</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="loja" class="card_imagens" src="imagens/lojas/loja3.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Rua: Rua das bananeiras 312</p>
                            <p class="cards_info">Cidade: Santana de Parnaiba</p>
                            <p class="cards_info">Estado: São Paulo</p>
                            <p class="cards_info">Telefone: (011) 8455-3232</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="loja" class="card_imagens" src="imagens/lojas/loja4.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Rua: Rua Otaviano Pisa </p>
                            <p class="cards_info">Cidade: Barueri</p>
                            <p class="cards_info">Estado: São Paulo</p>
                            <p class="cards_info">Telefone: (011) 8922-4432</p>
                        </div>
                    </div>
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