<?php
require_once "Class_conexao.php";

class Produtos
{
    private $Codigo;
    private $Nome;
    private $Valor;
    private $Quantidade;
    private $Descricao;
    private $imagem;

    function listar(){
        try{
            $bd = new Conexao();
            $con = $bd->conectar();
            $sql= $con->prepare("select * from Produtos");
            $sql->execute();
            if ($sql->rowCount() > 0){
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }

        }catch (PDOException $msg){
            echo "Não foi possivel listar os Produtos: ".$msg->getMessage();
        }

            
    }
    function Buscar($busca){
        try{

            $bd = new Conexao();
            $con = $bd->conectar();
            $pesquisar = $_POST['pesquisar'];
            $sql= $con->prepare("SELECT * FROM Produtos WHERE Nome LIKE ?");
            $sql->execute(array($busca));
            if ($sql->rowCount() > 0){
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }

        }catch (PDOException $msg){
            echo "Não foi possivel listar os Produtos: ".$msg->getMessage();
        }  
    } 

}


	    
       

 