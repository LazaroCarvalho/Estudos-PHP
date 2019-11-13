<?php 
    
    require_once('modulos/header.php');
    require_once('modulos/footer.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Bem-vindo ao CMS</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="imagem_fundo">
            <section class="cms">
                <div class="conteudo center">
                    <!-- Conteudo do CMS -->
                    <div class="container_cms center">
                        <!-- Importando Cabeçalho -->
                        <?=$header;?>
                        <!-- Conteúdo -->
                        <div class="cms_conteudo">
                            <div class="center" id="home_titulo">
                                <h1 id="titulo_home">Bem-Vindo(a) ao sistema de gerenciamento do site!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Importando rodapé -->
            <?=$footer;?>
        </div>
    </body>
</html>