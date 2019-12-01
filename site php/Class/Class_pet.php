<?php
require_once "Class_conexao.php";

class Pet
{
    //ATRIBUTOS
    private $Codigo;
    private $Animal;
    private $Raca;
    private $Nome;
    private $Sexo;
    private $Foto;
    private $usuario_email;

    function cadastrar(){
        try{
            if(isset($_POST["nomePet"]) && isset($_POST["sexoPet"])){
                $this->Animal = $_POST["tipoPet"];
                $this->Raca = $_POST["racaPet"];
                $this->Nome = $_POST["nomePet"];
                $this->Sexo = $_POST["sexoPet"];
                $this->Foto = $_SESSION["nomeFile"];
                $this->usuario_email = $_SESSION["emailUsuario"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("INSERT INTO Pet(Codigo, Animal, Raca, Nome, Sexo, Foto, usuario_email) 
                                    VALUES(null,?,?,?,?,?,?)");

                $sttm->execute(array(
                    $this->Animal,
                    $this->Raca,
                    $this->Nome,
                    $this->Sexo,
                    $this->Foto,
                    $this->usuario_email
                ));
                 
                if($sttm->rowCount()>0){
                    //conseguiu gravar os dados
                   return $result = $sttm->fetchAll(PDO::FETCH_CLASS);
                }
            }else{
                //se o usuario não preencheu os valores
                header("location: ../usuario/pet.php");
            }
        }catch(PODException $msg){
            echo "Não foi possível inserir o pet: ".$msg->getMessage();
        }
    }

    public function listar()
    {
        try {
            //code...
            if(isset($_SESSION["emailUsuario"])){
                $this->usuario_email = $_SESSION["emailUsuario"];

                $bd = new Conexao();
                $conn = $bd->conectar();
    
                $sttm = $conn->prepare("SELECT * FROM Pet where usuario_email = ?");
                $sttm->execute(array($this->usuario_email));
    
                if($sttm->rowCount() > 0){
                    return $result = $sttm->fetchAll(PDO::FETCH_CLASS);
                }
            }

        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possivel listar o pet: ".$msg->getMessage();
        }
    }

    public function listarservico()
    {
        try {
            //code...
            if(isset($_SESSION["emailUsuario"])){
                $this->usuario_email = $_SESSION["emailUsuario"];

                $bd = new Conexao();
                $conn = $bd->conectar();
    
                $sttm = $conn->prepare("SELECT * FROM Pet where usuario_email = ?");
                $sttm->execute(array($this->usuario_email));
    
                if($sttm->rowCount() > 0){
                    return $result = $sttm->fetchAll(PDO::FETCH_CLASS);
                }
            }

        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possivel listar o pet: ".$msg->getMessage();
        }
    }

    public function excluir($Codigo){
        try {
            //code...
            //verificar se recebeu a matricula
            if(isset($Codigo)){
                $this->Codigo = $Codigo;
                $this->usuario_email = $_SESSION["emailUsuario"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("DELETE FROM Pet WHERE Codigo = ? AND usuario_email = ?");
                $sttm->execute(array(
                    $this->Codigo,
                    $this->usuario_email
                ));

                if($sttm->rowCount() > 0){
                    header("location: ../../Pages/usuario/pet.php");
                }

            }else{
                header("location: ../../Pages/usuario/pet.php");
            }
        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possivel excluir os pets: ".$msg->getMessage();
        }
    }
   
    public function alterar(){
        try {
            //code...
            //varificar se recebeu valores do formularios
            if(isset($_POST["alterar"])){
                $this->Codigo = $_GET["codigoPet"];
                $this->Animal = $_POST["tipo_Pet"];
                $this->Raca = $_POST["raca_Pet"];
                $this->Nome = $_POST["nome_Pet"];
                $this->Sexo = $_POST["sexo_Pet"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("UPDATE Pet SET Animal = ?, Raca = ?, Nome = ?, Sexo = ? WHERE Codigo = ?");
                $sttm->execute(array(
                    $this->Animal,
                    $this->Raca, 
                    $this->Nome,
                    $this->Sexo,
                    $this->Codigo
                ));
                if($sttm->rowCount() > 0){
                    header("location: pet.php");
                }

            }else{
                header("location: pet.php");
            }
        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possível alterar o pet: ".$msg->getMessage();
        }
    }

    public function listarCodigo($Codigo){
        try {
            //code...
            if(isset($Codigo)){
                $this->Codigo = $Codigo;

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("SELECT * FROM Pet WHERE Codigo = ?");
                $sttm->execute(array($this->Codigo));

                if($sttm->rowCount() > 0){
                    return $result = $sttm->fetchObject();
                }

            }
        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possivel alterar o pet: ".$msg->getMessage();
        }
    }
    

}
?>