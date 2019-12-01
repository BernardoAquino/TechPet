<?php
require_once "Class_conexao.php";
class Usuario
{
    //atributos
    private $Email;
    private $Nome;
    private $Senha;

    public function cadastrar(){
        
        try{
            if(isset($_POST["email"])){

                $this->Nome = $_POST["name"];
                $this->Email = $_POST["email"];
                $this->Senha = $_POST["password"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("INSERT INTO Usuario(Email, Nome, Senha) 
                                    VALUES(?,?,?)");

                $sttm->execute(array(

                    $this->Email,
                    $this->Nome,
                    $this->Senha
                ));

                if($sttm->rowCount()>0){
                    
                    $_SESSION["nomeUsuario"] = $this->Nome = $_POST["name"];
                    $_SESSION["emailUsuario"] = $this->Email = $_POST["email"];

                    header("location: ../Pages/usuario/index_u.php");
                }
            }else{
                //se o usuario não preencheu os valores
                header("location: registro_u.php");
            }
        }catch(PODException $msg){
            echo "Não foi possível inserir o usuário: ".$msg->getMessage();
        }
    } 
    


    public function login()
    {
        try{
            if(isset($_POST["usuario"]) && isset($_POST["password"])){
                $this->Email = $_POST["usuario"];
                $this->Senha = $_POST["password"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("SELECT * FROM Usuario WHERE  Email = ? AND Senha = ?");
                $sttm->execute(array(
                    $this->Email,
                    $this->Senha
                ));
                
                
                if($sttm->rowCount() > 0)
                {
                    $usuario = $sttm->fetchObject();
                    $_SESSION["nomeUsuario"] = $usuario->Nome;
                    $_SESSION["emailUsuario"] = $usuario->Email;
                    header("location: Pages/usuario/index_u.php");

                }
                else
                {

                    return false;

                }
            }
        }catch(PDOException $msg){
            echo "Não foi possivel verificar se usuário existe".$msg->getMessage();
        }
    }

    public function verificaLogin()
    {
        try{
            $this->Email = $_POST["email"];

            $bd = new Conexao();
            $conn = $bd->conectar();

            $sttm = $conn->prepare("SELECT * FROM Usuario WHERE  Email = ?");
            $sttm->execute(array(
                $this->Email
            ));

            if($sttm->rowCount() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }catch(PDOException $msg){
            echo "Não foi possivel verificar se usuário existe".$msg->getMessage();
        }
    }

} 