<?php 

/*  Classe para a conexão com o banco de dados;
    Autor: Lázaro
    Data de Criação: 25/11/2019
    Modificações: 
        Data:
        Alterações realizadas: 
        Nome do desenvolvedor: 
*/

    class ConexaoMysql 
    {
        private $server;
        private $user;
        private $password;
        private $database;

        // Construtor
        // (seta) " -> " fica no lugar de ' . ' (ponto)
        public function __construct () 
        {
            $this->server = "localhost";
            $this->user = "root";
            $this->password = "bcd127";
            $this->database = "dbcontatos2019tb";
        }
        
        // Abre a conexão com o banco de dados.
        public function conectDatabase()
        {
            
            try {
                $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->database, $this->user, $this->password);

                return $conexao;
            }
            catch (PDOException $erro){
                echo("Erro ao realizar a conexão com o banco de dados!
                        <br> Linha do erro: ".$erro->getLine().
                        "<br> Mensagem do Erro: ".$erro->getMessage()
                    );
            }
            
        }
        
    }

?>