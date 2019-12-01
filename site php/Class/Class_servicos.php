<?php
require_once "Class_conexao.php";
class Servicos
{
    private $Codigo;
    private $Tipo;
    private $Data;
    private $Hora;
    private $Pet_Codigo;
    private $Petshop_CNPJ;

    public function inserirtosa(){
        try {
            //code...
            if(isset($_POST["cnpjtosa"]) && isset($_POST["nomePet"]) && isset($_POST["hora"])){
                $this->Pet_Codigo = $_POST["nomePet"];
                $this->Petshop_CNPJ = $_POST["cnpjtosa"];
                $this->Tipo = $_SESSION["Tipo"];
                $this->Data = $_POST["data"];
                $this->Hora = $_POST["hora"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("INSERT INTO Servicos(Codigo, Tipo, Data, hora, Pet_Codigo, Petshop_CNPJ) 
                                    VALUES(null,?,?,?,?,?)");

                $sttm->execute(array(
                    $this->Tipo,
                    $this->Data,
                    $this->Hora,
                    $this->Pet_Codigo,
                    $this->Petshop_CNPJ
                ));

                if($sttm->rowCount() > 0){
                    $_SESSION["validaçaoAgenda"] = true;
                    header("location: ../../Pages/usuario/servicos_u.php");
                }
            }
        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possível listar as consultas: ".$msg->getMessage();     
        }
    }

    public function inserirconsulta(){
        try {
            //code...
            if(isset($_POST["cnpjconsulta"]) && isset($_POST["nomePet"]) && isset($_POST["hora"])){
                $this->Pet_Codigo = $_POST["nomePet"];
                $this->Petshop_CNPJ = $_POST["cnpjconsulta"];
                $this->Tipo = $_SESSION["Tipo"];
                $this->Data = $_POST["data"];
                $this->Hora = $_POST["hora"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("INSERT INTO Servicos(Codigo, Tipo, Data, hora, Pet_Codigo, Petshop_CNPJ) 
                                    VALUES(null,?,?,?,?,?)");

                $sttm->execute(array(
                    $this->Tipo,
                    $this->Data,
                    $this->Hora,
                    $this->Pet_Codigo,
                    $this->Petshop_CNPJ
                ));

                if($sttm->rowCount() > 0){
                    $_SESSION["validaçaoAgenda"] = true;
                    header("location: ../../Pages/usuario/servicos_u.php");
                }
            }
        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possível listar as consultas: ".$msg->getMessage();     
        }
    }

    public function listarTosa(){
        try {
            $this->Tipo = "Tosa";

            $bd = new Conexao();
            $conn = $bd->conectar();

            $sttm = $conn->prepare("SELECT * FROM Servicos WHERE Tipo = ?");

            $sttm->execute(array(
                $this->Tipo
            ));

            if($sttm->rowCount() > 0){
                return $result = $sttm->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $msg) {
            echo "Não foi possível listar as tosas: ".$msg->getMessage();     
        }
    }

    public function listarConsulta(){
        try {
            $this->Tipo = "Consulta";

            $bd = new Conexao();
            $conn = $bd->conectar();

            $sttm = $conn->prepare("SELECT * FROM Servicos WHERE Tipo = ?");
            $sttm->execute(array(
                $this->Tipo
            ));
           
            if($sttm->rowCount() > 0){
                return $result = $sttm->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $msg) {
            echo "Não foi possível listar as consultas: ".$msg->getMessage();     
        }
    }
}