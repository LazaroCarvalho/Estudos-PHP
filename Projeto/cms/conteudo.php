<?php 

    require_once('modulos/header.php');
    require_once('modulos/footer.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>Conteúdo CMS</title>
    </head>
    <body>
        <div class="imagem_fundo">
            <section class="cms">
                <div class="conteudo center">
                    <!-- Conteudo do CMS -->
                    <div class="container_cms center">
                        <!-- Importando cabeçalho -->
                        <?=$header;?>
                        <!-- Conteúdo -->
                        <div class="cms_conteudo">
                            <div id="container_admpaginas">
                                <div class="admpagina_item">
                                    <div class="admitem_imagem">
                                    
                                    </div>
                                    <div class="admitem_titulo">
                                        <a href="admcuriosidades.php">
                                            <h2 class="adm_estilo">Administrar Curiosidades</h2>
                                            <p> Clique para editar a página</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="admpagina_item">
                                    <div class="admitem_imagem">
                                    
                                    </div>
                                    <div class="admitem_titulo">
                                        <a href="#">
                                            <h2 class="adm_estilo">Administrar Curiosidades</h2>
                                            <p> Clique para editar a página</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="admpagina_item">
                                    <div class="admitem_imagem">
                                    
                                    </div>
                                    <div class="admitem_titulo">
                                        <a href="#">
                                            <h2 class="adm_estilo">Administrar Curiosidades</h2>
                                            <p> Clique para editar a página</p>
                                        </a>
                                    </div>
                                </div>
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