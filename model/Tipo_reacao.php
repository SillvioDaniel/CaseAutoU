<?php
class Tipo_Reacao{

private $id;
private $tipo;
//GETERS AND SETTERS---------------------------------------------------------------------->
	public function getId() {
		return $this->id;
	}

	public function setId( $id) {
		$this->id = $id;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo( $tipo) {
		$this->tipo = $tipo;
	}
//--------------------------------------------------------------------------------------->

//CONSTRUCT ---------------------------------------------------------->

public function __construct($id=NULL, $tipo=NULL)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }
//--------------------------------------------------------------------->

public function all(){

    $sql = $this->con->prepare("SELECT * FROM Tipo_reacao");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

    return $rows;

}









}
?>