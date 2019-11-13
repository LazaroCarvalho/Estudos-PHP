<?php 

    /* Variável a ser usada para chamar o Cabeçalho nas páginas  */
    $header = 
    "<div class='conteudo center'>
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
                <div id='seta_branca'>
                    <img alt='seta' src='icons/sobre/arrow-24-16.png' >
                </div>
            </div>
            <div class='bkg_laranja' id='caixa_login'>
                <div class='bkg_laranja' id='form_container'>
                    <form name='frmformulario' method='post' action='cms/home.php'>
                        <div class='form_login'>
                            Usuario: <br>
                            <input type='text' class='input_form_login'>
                        </div>
                        <div class='form_login'>
                            Senha: <br>
                            <input type='text' class='input_form_login'>
                        </div>
                        <a href='cms/home.php'>
                            <input type='submit' id='botao_submit' value='OK'>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>"
        
?>