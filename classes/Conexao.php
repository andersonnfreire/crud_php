<?php

/**
 * Description of Conexao
 *
 * @author andersonfreire
 */
class Conexao {
    
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;
    
    //Construtor
    function __construct() {
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "bancoPHP";
        $this->servidor = "localhost";
    }

    //Metodo para conectar com o banco
    
    function conectar()
    {
        try
        {
            if(is_null(self::$pdo))
            {
                self::$pdo = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $ex) {
            echo'Erro. '.$ex->getMessage();    
        }
    }
    
    
}

