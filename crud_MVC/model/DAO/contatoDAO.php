<?php 

    /*  Classe para a integração de Contato com o banco de dados;
        Autor: Lázaro
        Data de Criação: 25/11/2019
        Modificações: 
            Data:
            Alterações realizadas: 
            Nome do desenvolvedor: 
    */

    class ContatoDAO 
    {
        
        private $conexaoMysql;
        private $conexao;
        
        // Construtor
        public function __construct() 
        {  
            require_once('conexaoMysql.php');
            require_once('model/contatoClass.php');
            
            // Instância da classe de conexão com o BD.
            $this->conexaoMysql = new ConexaoMysql();
            
            // Abre a conexão com o banco de dados e guarda no atributo $conexao.
            $this->conexao = $this->conexaoMysql->conectDatabase();
        }
        
        // Insere um novo contato.
        public function insertContato(Contato $contato) 
        {
            $sql = "INSERT INTO tblcontatos 
                    (nome, telefone, celular, email)
                    VALUES 
                    (?, ?, ?, ?)";
            
            $statement = $this->conexao->prepare($sql);
            
            $statementDados = array(
                $contato->getNome(),
                $contato->getTelefone(),
                $contato->getCelular(),
                $contato->getEmail()
            );
            
            if($statement->execute($statementDados))
                echo("Registro Inserido com Sucesso");
            else
                echo("Erro ao executar o Script no banco de dados");
            
        }
        
        // Atualiza um Contato
        public function updateContato() 
        {
            
        }
        
        // Exclui um Contato.
        public function deleteContato() 
        {
            
        }
        
        // Seleciona todos os Contatos.
        public function selectAllContato() 
        {
            
            $sql = "SELECT * FROM tblcontatos";
            // Select recebe o retorno da execução do script no banco.
            $select = $this->conexao->query($sql);
            
            // Retornando para $rs o conteúdo de $select transformado em array.
            $contador = (int) 0;
            while($rs = $select->fetch(PDO::FETCH_ASSOC))
            {
                
                // Criando uma coleção de objetos Contato.
                $arrayContatos[] = new Contato();
                
                // Criando cada objeto com suas informações na coleção
                $arrayContatos[$contador]->setNome($rs['nome']);
                $arrayContatos[$contador]->setTelefone($rs['telefone']);
                $arrayContatos[$contador]->setCelular($rs['celular']);
                $arrayContatos[$contador]->setEmail($rs['email']);
                
                $contador++;
                
            }
            
            // Retornando a array de objetos.
            return $arrayContatos;
            
        }
        
        // Seleciona um contato pelo ID.
        public function selectByIdContato() 
        {
            
        }
        
    }

?>