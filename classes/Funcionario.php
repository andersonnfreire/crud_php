<?php

require_once 'Conexao.php';
require_once 'Funcoes.php';

/**
 * Description of Funcionario
 *
 * @author andersonfreire
 */
class Funcionario {

    // Objeto para utilizar a conexao
    private $con;
    // objeto para utilizar a classe funcoes
    private $objFunc;
    private $idFuncionario;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;

    //CONSTRUTOR
    public function __construct() {
        $this->con = new Conexao();
        $this->objFunc = new Funcoes();
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function querySeleciona($dado) {
        try {
            $this->idFuncionario = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("SELECT `idFuncionario`, `nome`, `email`, `data_cadastro` FROM `funcionario` WHERE `idFuncionario` = :idFunc;");
            $cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
            if ($cst->execute()) {
                return $cst->fetch();
            }
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function querySelect() {
        try {
            $cst = $this->con->conectar()->prepare("SELECT `idFuncionario`, `nome`, `email`, `data_cadastro` FROM `funcionario`");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function queryInsert($dados) {
        try {
            $this->nome = $this->objfc->tratarCaracter($dados['nome'], 1);
            $this->email = $this->objfc->tratarCaracter($dados['email'], 1);
            $this->senha = sha1($dados['senha']);
            $this->dataCadastro = $this->objfc->dataAtual(2);
            $cst = $this->con->conectar()->prepare("INSERT INTO `funcionario` (`nome`, `email`, `senha`, `data_cadastro`) VALUES (:nome, :email, :senha, :data);");
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $cst->bindParam(":data", $this->dataCadastro, PDO::PARAM_STR);
            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'Error ao cadastrar';
            }
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function queryUpdade($dados) {
        try {
            $this->idFuncionario = $this->objfc->base64($dados['func'], 2);
            $this->nome = $dados['nome'];
            $this->email = $dados['email'];
            $cst = $this->con->conectar()->prepare("UPDATE `funcionario` SET `nome` = :nome, `email` = :email WHERE `idFuncionario` = :idFunc;");
            $cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'Error ao alterar';
            }
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function queryDelete($dado) {
        try {
            $this->idFuncionario = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("DELETE FROM `funcionario` WHERE `idFuncionario` = :idFunc;");
            $cst->bindParam(":idFunc", $this->idFuncionario, PDO::PARAM_INT);
            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'Erro ao deletar';
            }
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

}
