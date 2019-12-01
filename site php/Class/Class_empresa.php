<?php
require_once "Class_conexao.php";
class Empresa
{
    private $CNPJ;
    private $Nome;
    private $CEP;
    private $Email;
    private $Endereco;
    private $Foto;
    private $Telefone;
    private $Senha;

    function cadastrar(){
        try {
            //code...
            if(isset($_POST["cnpj"]) && isset($_POST["email"])){
                $this->CNPJ = $_POST["cnpj"];
                $this->Nome = $_POST["name"];
                $this->CEP = $_POST["cep"];
                $this->Email = $_POST["email"];
                $this->Endereco = $_POST["endereco"];
                $this->Foto = $_SESSION["nomeFileEmpresa"];
                $this->Telefone = $_POST["telefone"];
                $this->Senha = $_POST["password"];

                $bd = new Conexao();
                $conn = $bd->conectar();

                $sttm = $conn->prepare("INSERT INTO Petshop(CNPJ,Nome,CEP,Email,Endereco,Foto, Telefone,Senha) VALUES (?,?,?,?,?,?,?,?)");
                $sttm->execute(array(
                    $this->CNPJ,
                    $this->Nome,
                    $this->CEP,
                    $this->Email,
                    $this->Endereco,
                    $this->Foto,
                    $this->Telefone,
                    $this->Senha
                ));
                if($sttm->rowCount() > 0){
                    $_SESSION["nomeEmpresa"] =  $_POST["name"];
                    header("location: ../empresa/index_e.php");
                }
            }else{
                header("registro_e.php");
            }
        } catch (PDOException $msg) {
            //throw $th;
            echo "Não foi possível cadastrar a empresa: ".$msg->getMessage();
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

                $sttm = $conn->prepare("SELECT * FROM Petshop WHERE  Email = ? AND Senha = ?");
                $sttm->execute(array(
                    $this->Email,
                    $this->Senha
                ));
                
                
                if($sttm->rowCount() > 0)
                {
                    $empresa = $sttm->fetchObject();
                    $_SESSION["nomeEmpresa"] = $empresa->Nome;
                    $_SESSION["cnpjEmpresa"] = $empresa->CNPJ;
                    header("location: Pages/empresa/index_e.php");

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
            $this->CNPJ = $_POST["cnpj"];
            $this->Email = $_POST["email"];

            $bd = new Conexao();
            $conn = $bd->conectar();

            $sttm = $conn->prepare("SELECT * FROM Petshop WHERE CNPJ = ? OR Email = ?");
            $sttm->execute(array(
                $this->CNPJ,
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

    public function listarTodos()
    {
        //validar a  execucao do codigo
        try{
            //instaciar a classe conexao
            $bd = new Conexao();
            //criar um objeto com conexao PDO
            $conn = $bd->conectar();

            //criar o comando sql para enviar para o banco
            $sql= $conn->PREPARE("SELECT *FROM Petshop");

            //executar comando
            $sql->EXECUTE();

            //testar se retornou valores
            if($sql->rowCount() > 0){
                //se tem valres o rsultado para o HTML
                return $result = $sql->fetchAll(PDO::FETCH_CLASS); // fetchALL (devolve o resultado em formato linha/colunas)
            }
        }catch(PDOException $msg)
        {
            echo "Não foi possível listar as empresas: ".$msg->getMessage();      
        }
    }

    function Buscar($busca){
        try{
            if(isset($_POST['pesquisar'])){
                $pesquisar = $_POST['pesquisar'];

                $bd = new Conexao();
                $con = $bd->conectar();
    
                $sql= $con->prepare("SELECT * FROM Petshop WHERE Nome LIKE ?");
                $sql->execute(array($busca));
                if ($sql->rowCount() > 0){
                    return $result = $sql->fetchAll(PDO::FETCH_CLASS);
                }
            }
        }catch (PDOException $msg){
            echo "Não foi possivel listar os Produtos: ".$msg->getMessage();
        }  
    } 

}
?>