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
        <meta charset="utf-8">
        <title>Promoções - Delícia Gelada</title>
    </head>
    <body>
        
        <!-- CABEÇALHO -->
        <div class="cabecalho">
            <?=$header?>
        </div>
        <div class="ocupa_cabecalho">
        
        </div>
        
        <!-- Apresentação da Página -->
        <section id="destaques">
            <div class="conteudo center">
                <div class="center" id="destaques_text">
                    <div id="destaques_imagem">
                        
                    </div>
                    <div id="destaques_texto">
                        <h1 id="destaques_titulo">
                            DESTAQUES DO MÊS
                        </h1>
                        <p id="destaques_textos">
                            Todos os meses, escolhemos um produto em destaque! Confire agora.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Lista dos produtos -->
        <section id="lista_destaques">
            <h1 style="display:none;">a</h1>
            <div class="conteudo center">
                <div class="center" id="container_destaques">
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="produto" class="card_imagens" src="imagens/destaques/produto1.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Nome: Coca-Cola</p>
                            <p class="cards_info">Descrição: Refrigerante de Coca</p>
                            <p class="cards_info" id="preco">Preço: </p>
                            <div class="cards_info">R$ 8,00</div>
                            <div class="cards_info">Info: Produto mais bem avaliado do mês!</div>
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