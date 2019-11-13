<?php 
    
    function conexaoMysql()
    {
        /* 
        Tipos de conexões com o Banco de Dados

        Primeiro Tipo - mysql_connect() - biblioteca mais antiga para conectar-se com o banco de dados.
        3 parâmetros - user, host, password.
        mysql_select_db(databasename) - Database que será utilizado.

        Segundo tipo - mysqli_connect() - Utiliza quatro parâmetros:
            mysqli_connect(host, user, password, databasename);

        Terceiro Tipo - PDO - Classe para conexão com o banco de dados utilizando o conceito de orientação a objetos.
    
        Ex: $conn = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', user, password);

        */

        $server = (string) "localhost";  // Local de instalação do banco de dados
        $user = (string) "root"; // Usuário para conexão com o Banco de Dados
        $password = (string) "bcd127";  // Senha para conexão com o Banco de dados
        $database = (string) "dbcontatos20192ta";    // Nome do database.
        
        $conexao = mysqli_connect($server, $user, $password, $database);

        return $conexao;
    }

?>