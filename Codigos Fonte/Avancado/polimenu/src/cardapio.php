<?php
//Classe cardapio
include 'conn.php';

class Cardapio{
    //Atributos
    private $id;
    public $nome;
    public $descricao;
    public $data;
    public $usuario;
    public $ativo;

    /** Definicao das funcoes */
    //Gravacao dos dados na tabela cardapio
    function Insere(String $nome, String $descricao){
        //Atribuindo valores para serem inseridos no banco        
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->usuario = 1;
        $this->ativo = 'A';

        //Instancia a conexao com o banco
        $db = new ConectaBanco;   
        $query = 'INSERT INTO cardapio(nome, descricao, usuario, ativo) VALUES(?,?,?,?)';
        $sql = $db->prepare($query);
        $sql->bindParam(1, $this->nome);
        $sql->bindParam(2, $this->descricao);
        $sql->bindParam(3, $this->usuario);
        $sql->bindParam(4 , $this->ativo);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            print 'Dados gravados com sucesso!';
        }else{
            print 'Erro gravando dados!';
        }
    }

    function Listar(){
        //Listar todos os registros da tabela cardapio
        $db = new ConectaBanco;
        $query = 'SELECT * FROM cardapio';
        $sql = $db->prepare($query);
        $sql->execute();
        $ret = $sql->fetchAll();

        return $ret;

    }

    function Alterar(){
        //Alterar registro da na tabela cardapio
    }

    function Exclui(){
        //Exclui registro na tabela cardapio
    }



}

?>

