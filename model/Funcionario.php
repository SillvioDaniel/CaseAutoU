<?php

class Funcionario
{
    private $matricula;
    private $email;
    private $nome;
    private $sobrenome;

    private $departamento;
    private $cargo;
    private $foto_colaborador;
    private $senha;

   /*CONSTRUCT*/
    public function __construct($matricula= NULL, $email=NULL, $nome=NULL, $sobrenome=NULL,$departamento=NULL,$cargo=NULL,$foto_colaborador=NULL,$senha=NULL)
    {
        $this->matricula = $matricula;
        $this->email = $email;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->departamento = $departamento;
        $this->cargo = $cargo;
        $this->foto_colaborador = $foto_colaborador;
        $this->senha = $senha;
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    /*GETERS AND SETTERS*/
    public function getMatricula()
    {
        return $this->matricula;
    }

  
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
   
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }
    
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    
    public function getFoto_colaborador()
    {
        return $this->foto_colaborador;
    }

  
    public function setFoto_colaborador($foto_colaborador)
    {
        $this->foto_colaborador = $foto_colaborador;
    }

    public function getSenha()
    {
        return $this->senha;
    }

  
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

/*Functions*/
public function all(){

    $sql = $this->con->prepare("SELECT * FROM Funcionario");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    return $rows;

}

public function criar(){
    $sql = $this->con->prepare("INSERT into Funcionario values(?,?,?,?,?,?,?,?)");
    $sql->execute(array($this->matricula, $this->email, $this->nome, $this->sobrenome, $this->departamento, $this->cargo, $this->foto_colaborador,$this->senha));


}


public function login(){

    $sql = $this->con->prepare("SELECT * FROM Funcionario where matricula =? and senha =?");
    $sql->execute(array($this->matricula,$this->senha));
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    return $rows;
    
}








}
