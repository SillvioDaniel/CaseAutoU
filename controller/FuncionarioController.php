<?php
require_once 'model/Funcionario.php';
require_once 'model/Reacao.php';
require_once 'model/Tipo_reacao.php';

class FuncionarioController
{    
    public function logout(){
     session_start();
     session_destroy();
     header("Location: index.php");
     

    }
    public function all(){

        $obj = new Funcionario();
        $reacoes = $obj->all();
        include "view/Funcionario_all.php";

    }
    
    public function criar(){
       
        
            if(isset($_POST["matricula"])){
            $diretorio = "inc/fotos/";
            $nome_a = $_FILES["foto"]["name"];
            $caminho = $diretorio . $nome_a;
         //   move_uploaded_file($_FILES["foto"]["tmp_name"],$caminho);


            $funcionario = new Funcionario();
            $funcionario ->setMatricula($_POST['matricula']);
            $funcionario ->setEmail($_POST['email']);
            $funcionario ->setNome($_POST['nome']);
            $funcionario ->setSobrenome($_POST['sobrenome']);
            $funcionario ->setDepartamento($_POST['departamento']);
            $funcionario ->setCargo($_POST['cargo']);
            $funcionario ->setFoto_colaborador($nome_a);
            $funcionario ->setSenha($_POST['senha']);


            $funcionario ->criar();
        
            }
        require_once 'view/Criar_f.php';

}
public function login(){
    
$funcionario = new Funcionario();
if (isset($_POST['matricula'])){
            $funcionario ->setMatricula($_POST['matricula']);
            $funcionario ->setSenha($_POST['senha']);

            $user = $funcionario->login();

            if(is_array($user) ){
                
                $_SESSION['usuario'] = $user[0]->matricula;
                $_SESSION['nome'] = $user[0]->nome;

    }else{
        echo"<script>alert('Matrícula ou Senha Incorretas')</script>";
    }
    if (isset($_SESSION['usuario'])){
        header("Location:./?classe=Reacao&acao=all");
    }
    
}
    require_once 'view/login.php';

        
            

            }
        }
    


























    
