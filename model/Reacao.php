<?php
class Reacao{
private $id;
private $comentario;
private $data;
private $id_elogiado;
private $id_elogia;
private $id_tipo;

//GETERS AND SETTERS---------------------------------------------------------------------->
	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getComentario() {
		return $this->comentario;
	}

	public function setComentario($comentario) {
		$this->comentario = $comentario;
	}

	public function getData() {
		return $this->data;
	}

	public function setData( $data) {
		$this->data = $data;
	}

	public function getId_elogiado() {
		return $this->id_elogiado;
	}

	public function setId_elogiado($id_elogiado) {
		$this->id_elogiado = $id_elogiado;
	}

	public function getId_elogia() {
		return $this->id_elogia;
	}

	public function setId_elogia($id_elogia) {
		$this->id_elogia = $id_elogia;
	}

	public function getId_tipo() {
		return $this->id_tipo;
	}

	public function setId_tipo($id_tipo) {
		$this->id_tipo = $id_tipo;
	}
//--------------------------------------------------------------------------------------->

//CONSTRUCT ---------------------------------------------------------->

public function __construct($id=NULL, $data=NULL, $comentario=NULL, $id_elogia=NULL,$id_elogiado=NULL,$id_tipo=NULL)
    {
        $this->id = $id;
        $this->data = $data;
        $this->comentario = $comentario;
        $this->id_elogia = $id_elogia;
        $this->id_elogiado = $id_elogiado;
        $this->id_tipo = $id_tipo;
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }
//--------------------------------------------------------------------->

public function reacoes(){

    $sql = $this->con->prepare("SELECT * FROM Reacao");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    return $rows;

}

    public function reagir()
    {
        $sql = $this->con->prepare("INSERT into Reacao VALUES(NULL,?,CURRENT_TIMESTAMP(),?,?,?)");
        $sql->execute(array($this->comentario, $this->id_elogia, $this->id_elogiado, $this->id_tipo));


    }

	public function leaderboard(){

		$sql = $this->con->prepare("SELECT * FROM leaderboard order by cont_reacao DESC LIMIT 5");
		$sql->execute();
		$rows = $sql->fetchAll(PDO::FETCH_CLASS);
	
		return $rows;
	
	}

	public function all(){

		$sql = $this->con->prepare("SELECT * FROM reacoes order by data");
		$sql->execute();
		$rows = $sql->fetchAll(PDO::FETCH_CLASS);
	
		return $rows;
	
	}
	public function apagar(){
        $sql = $this->con->prepare("DELETE FROM Reacao WHERE id=?");
        $sql->execute(array($this->id));
    }


















}
?>