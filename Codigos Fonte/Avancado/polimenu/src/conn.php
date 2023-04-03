<?php
class ConectaBanco extends PDO{
    private $user;
    private $password;
    private $host;
    private $database;
    private $port;

    public function __construct(){
        $this->user     = 'root';
        $this->password = 'P123@456';
        $this->host     = 'localhost';
        $this->database = 'polimenu';
        $this->port     = '3306';

        try{
            parent::__construct('mysql:host='.$this->host.';dbname='.$this->database, $this->user, $this->password);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }catch(PDOException $e){
            echo 'Falha na conexao com o banco de dados.';
        }
    }   
    
}