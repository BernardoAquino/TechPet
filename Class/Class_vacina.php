<?php
require_once "Class_conexao.php";

class Vacina
{
    private $Nome;
    private $DTA_Aplicacao;
    private $DTA_Vencimento;
    private $Pet_Codigo;

    

    function listar($Vacinar){
        try{
            $bd = new Conexao();
            $con = $bd->conectar();
            $vacina = $_POST['petCodigo'];
            $sql= $con->prepare("SELECT * FROM Vacinas WHERE Pet_Codigo = ?");
            $sql->execute(array($Vacinar));
            if ($sql->rowCount() > 0){
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
            }

        }catch (PDOException $msg){
            echo "Não foi possivel listar os Vacinas: ".$msg->getMessage();
        }
    }
   
}

