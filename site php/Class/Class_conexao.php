<?php

header("Content-type:text/html; charset=utf8");
session_start();

class Conexao{
    //atributos
    private $servidor;
    private $banco;
    private $usuario;
    private $senha;

    //metodos 
    function __construct()
    {
        $this->servidor="localhost";
        $this->banco="techpetbd";
        $this->usuario="root";
        $this->senha="";
    }

    public function conectar()
    {
        try{
            $conn = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco.";charset=utf8;",$this->usuario,$this->senha);
            return $conn;
        }catch(PDOException $msg)
        {
            echo "Não foi possivel conectar ao banco de dados".$msg->getMessage();
        }
    }
}

