<?php
require_once 'model/Funcionario.php';
require_once 'model/Reacao.php';
require_once 'model/Tipo_reacao.php';

class ReacaoController
{    
    public function all(){

        $obj = new Reacao();
        $reacoes = $obj->all();
        include "view/Reacao_all.php";

    }
    public function allad(){

        $obj = new Reacao();
        $reacoes = $obj->all();
        include "view/Reacao_admin.php";

    }
    public function leaderboard(){

        $obj = new Reacao();
        $leaderboard = $obj->leaderboard();
        include "view/LeaderBoard.php";

    }


   
    public function reagir(){
    
        if (isset($_POST['enviar'])){
                $reacao = new Reacao();
                $reacao ->setComentario($_POST['comentario']);
                $reacao ->setId_elogia(1694);
                $reacao ->setId_elogiado($_POST['id_elogiado']);
                $reacao ->setId_tipo($_POST['id_tipo']);
    
                $reacao ->reagir();
                echo"<script>alert('Obrigado Pela Reação!!!')</script>";
        }
            $obj = new Funcionario();
            $funcionarios = $obj->all();
            $obj1 = new Tipo_Reacao();
            $tipos_reacao = $obj1->all();
            require_once 'view/Reagir.php';
    
}
public function apagar()
    {
        $reacao = new Reacao();
        $reacao ->setId($_GET['id']);
        var_dump($_GET['id']);
        $reacao->apagar();

        require_once ("view/reacao_apagar.php");
        header("Location:./?classe=Reacao&acao=allad");
        echo"<script>alert('Reação Excluída!!!')</script>";
    }





















    public function login(){
        
    }
}