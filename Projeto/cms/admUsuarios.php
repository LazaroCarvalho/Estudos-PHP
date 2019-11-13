<?php 
    
    require_once('modulos/header.php');
    require_once('modulos/footer.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Administração de Usuários</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.js"></script>
        <script>
            
            $(document).ready(function(){
               
                $("#criar_usuario").click(function(){
                    $("#container_cadastro_usuario").fadeIn(500);
                });
                
            });
            
        </script>
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
                        <div class="cms_conteudo" id="cms_conteudo_cadastro">
                            <div id="caixa_usuarios">
                                <div id="container_info_usuarios">
                                    <div class="item_infousuarios" id="criar_usuario">
                                        <div class="text_infousuarios">
                                            Cadastrar Usuário
                                        </div>
                                        <div class="item_infousuario_icon">
                                            <img class="seta" src="icons/arrow-point-to-right.png">
                                        </div>
                                    </div>
                                    <div class="item_infousuarios" id="criar_usuario">
                                        <div class="text_infousuarios">
                                            Usuarios Cadastrados
                                        </div>
                                        <div class="item_infousuario_icon">
                                            <img class="seta" src="icons/arrow-point-to-right.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cont_conteudo_all">
                                <div id="container_cadastro_usuario">
                                    <div class="center" id="caixa_cadastro_usuario">
                                        <div class="center" id="cont_titulo_cadastro">
                                            <div class="center" id="titulo_contato">
                                                <div class="center" id="contato_texto">
                                                    Criar Usuário
                                                </div>
                                                <div class="center" id="img_contato">
                                                    <img src="icons/UserAdd_40960.png" id="icon_contato">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="center" id="container_campos_cadastro">
                                            <div class="cont_campo_cadastro">
                                                <div class="nome_campo_cadastro">
                                                    Usuário:
                                                </div>
                                                <div class="input_campo_cadastro">
                                                    <input type="text" class="input_text" maxlength="50">
                                                </div>
                                            </div>
                                            <div class="cont_campo_cadastro">
                                                <div class="nome_campo_cadastro">
                                                    Email:
                                                </div>
                                                <div class="input_campo_cadastro">
                                                    <input type="text" class="input_text" maxlength="50">
                                                </div>
                                            </div>
                                            <div class="cont_campo_cadastro">
                                                <div class="nome_campo_cadastro">
                                                    Senha:
                                                </div>
                                                <div class="input_campo_cadastro">
                                                    <input type="text" class="input_text" maxlength="50">
                                                </div>
                                            </div>
                                            <div class="cont_campo_cadastro">
                                                <div class="nome_campo_cadastro">
                                                    Nível:
                                                </div>
                                                <div class="input_campo_cadastro">
                                                    <input type="text" class="input_text" maxlength="50">
                                                </div>
                                            </div>
                                        </div>
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