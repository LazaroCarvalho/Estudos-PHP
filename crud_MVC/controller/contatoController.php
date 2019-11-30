<?php 

    /*  Classe de Controller do Contato.
        Autor: Lázaro
        Data de Criação: 25/11/2019
        Modificações: 
            Data:
            Alterações realizadas: 
            Nome do desenvolvedor: 
    */

    class ContatoController 
    {
        
        // Construtor
        public function __construct() 
        {
            require_once('model/contatoClass.php');
            require_once('model/DAO/contatoDAO.php');
        }
        
        // Novo contato.
        public function novoContato()
        {
            
            // Instância da classe contato.
            $contato = new Contato();
            
            // Guarda nos atributos da classe o post do FORM.
            $contato->setNome($_POST['txtnome']);
            $contato->setTelefone($_POST['txttelefone']);
            $contato->setCelular($_POST['txtcelular']);
            $contato->setEmail($_POST['txtemail']);
            
            // Instância da classe ContatoDAO;
            $contatoDAO = new ContatoDAO();
            
            // Envia o objeto criado para o método de insert.
            $contatoDAO->insertContato($contato);
            
        }
        
        // Atualiza um contato.
        public function atualizarContato()
        {
            
        }
        
        // Exclui um contato.
        public function excluirContato()
        {
            
        }
        
        // Lista todos contato.
        public function listarContato()
        {
            $contatoDao = new ContatoDAO();
         
            // chamando função que retorna todos os registros de contatos do banco.
            return $contatoDao->selectAllContato();
        }
        
        // Busca um contato pelo ID.
        public function buscarContato()
        {
            
        }
        
    }

?>