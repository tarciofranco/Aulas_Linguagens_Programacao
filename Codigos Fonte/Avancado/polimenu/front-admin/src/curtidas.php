<?php
//Classe curtidas


include 'conn.php';

class Curtidas{
    //Atributos
    private $id;
    public $cardapio;
    public $gostei;
    public $nao_gostei;


    /** Definicao das funcoes */
    //Gravacao dos dados na tabela cardapio
    function Curtida(Int $cardapio, Int $gostei, Int $nao_gostei){
        //Atribuindo valores para serem inseridos no banco        
        $this->cardapio = $cardapio;
        $this->gostei = $gostei;
        $this->nao_gostei = $nao_gostei;

        //Instancia a conexao com o banco
        $db = new ConectaBanco;   
        $buscaCardapio = Self::BuscarPorIDCardapio($this->cardapio);
        print count($buscaCardapio);
        //var_dump($buscaCardapio);
        if(count($buscaCardapio) == 0){
            //Inserir novo registro
            $query = 'INSERT INTO curtidas(cardapio, gostei, naogostei, status) VALUES(?,?,?,1)';
            $sql = $db->prepare($query);
            $sql->bindParam(1, $this->cardapio);
            $sql->bindParam(2, $this->gostei);
            $sql->bindParam(3, $this->nao_gostei);
            $sql->execute();
            
            if($sql->rowCount() > 0){
                print 'Dados gravados com sucesso!';
            }else{
                print 'Erro gravando dados!';
            }
        }else{
            print 'atualizando';
            //Atualizar os contadores de curtida
            $query = 'UPDATE curtidas SET gostei = (gostei + ?), naogostei = (naogostei + ?) WHERE cardapio = ? AND status = 1';
            $sql = $db->prepare($query);
            $sql->bindParam(1, $this->gostei);
            $sql->bindParam(2, $this->nao_gostei);
            $sql->bindParam(3, $this->cardapio);
            $sql->execute();   

            if($sql->rowCount() > 0){
                print 'Dados atualizados com sucesso!';
            }else{
                print 'Erro atualizando dados!';
            }                     
        }


   

    }

    function BuscarPorIDCardapio(Int $id){
        $this->cardapio = $id;
        //Listar todos os registros da tabela cardapio
        $db = new ConectaBanco;
        $query = "SELECT * FROM curtidas WHERE status = '1' AND cardapio = ? ";
        $sql = $db->prepare($query);
        $sql->bindParam(1, $this->cardapio);
        $sql->execute();
        $ret = $sql->fetchAll();

        return $ret;
    }

    function Listar(){
        //Listar todos os registros da tabela cardapio
        $db = new ConectaBanco;
        $query = "SELECT * FROM cardapio WHERE ativo = 'A' ";
        $sql = $db->prepare($query);
        $sql->execute();
        $ret = $sql->fetchAll();

        return $ret;

    }

    function Alterar(){
        //Alterar registro da na tabela cardapio
    }

    function Exclui(Int $id){
        //Exclui registro na tabela cardapio
        $this->id = $id;
        $db = new ConectaBanco;
        $q = "UPDATE cardapio SET ativo = 'I' WHERE id = ? AND ativo = 'A' ";
        $sql = $db->prepare($q);
        $sql->bindParam(1, $this->id );
        $sql->execute();

        if($sql->rowCount() > 0){
            print 'Registro excluido com sucesso';
        }else{
            print 'Erro excluindo o registro';
        }
    }



}

?>


