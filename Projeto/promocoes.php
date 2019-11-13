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
        <section id="promocoes">
            <div class="conteudo center">
                <div class="center" id="promocoes_text">
                    <div id="promocoes_imagem">
                        
                    </div>
                    <div id="promocoes_texto">
                        <h1 id="promocoes_titulo">
                            PROMOÇÕES DO MÊS
                        </h1>
                        <p id="promocoes_textos">
                            Confira as nossas promoções do mês
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Lista de Produtos -->
        <section id="lista_promocoes">
            <h1 style="display:none;">a</h1>
            <div class="conteudo center">
                <div class="center" id="container_promocoes">
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="produto" class="card_imagens" src="imagens/promocoes/produto1.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Nome: Coca-Cola</p>
                            <p class="cards_info">Descrição: Refrigerante de Coca</p>
                            <p class="cards_info preco">Preço: </p>
                            <div class="cards_info preco_antigo"><p>R$ 12,00</p></div>
                            <div class="cards_info preco_atual">R$ 8,00</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="produto" class="card_imagens" src="imagens/promocoes/produto2.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Nome: Suco de Mamão Happy Day</p>
                            <p class="cards_info">Descrição: Suco de mamão</p>
                            <p class="cards_info preco">Preço:</p>
                            <div class="cards_info preco_antigo"><p>R$ 10,00</p></div>
                            <div class="cards_info preco_atual">R$ 8,00</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="produto" class="card_imagens" src="imagens/promocoes/produto3.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Nome: Suco de Uva Natural</p>
                            <p class="cards_info">Descrição: Suco Natural</p>
                            <p class="cards_info preco">Preço:</p>
                            <div class="cards_info preco_antigo"><p>R$ 6,00</p></div>
                            <div class="cards_info preco_atual">R$ 4,00</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_imagem center">
                            <img alt="produto" class="card_imagens" src="imagens/promocoes/produto4.jpg">
                        </div>
                        <div class="card_info center">
                            <p class="cards_info">Nome: Suco de Laranja</p>
                            <p class="cards_info">Descrição: Suco Naturox</p>
                            <p class="cards_info preco">Preço:</p>
                            <div class="cards_info preco_antigo"><p>R$ 14,00</p></div>
                            <div class="cards_info preco_atual">R$ 10,00</div>
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