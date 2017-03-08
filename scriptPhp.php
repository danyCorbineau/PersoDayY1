<?php
class BaseDeDonne
{
	private $bdd;
	private $data=NULL;
	/*
		rqt select
	*/
	public function getImageCreation() // get image of creations
	{
		$r="SELECT `nom_image` AS image FROM `creations`";
		$this->data = $this->sendRqt($r);
		return $this->data;
	}
	public function getTypeBijou() // get name, image and description of Types of Bijoux
	{
		$r="SELECT `nom_type` AS nom, image, description  FROM `types_bijou`";
		$this->data = $this->sendRqt($r);
		return $this->data;
	}
	public function getSousTypeBijou() // get name_sous_type,type, image of Sous_Type (NOT USE)
	{
		$r="SELECT nom_sous_type AS sous_type, tb.nom_type AS type, stb.image FROM sous_type_bijou stb JOIN types_bijou tb ON (stb.id_type_bijou=tb.id_type_bijou) GROUP BY id_sous_type_bijou";
		$this->data = $this->sendRqt($r);
		return $this->data;
	}
	public function getMetaux() // get name, color, image and parameres of metaux
	{
		$r="SELECT nom, couleur, methode_entretien, description, nom_image AS image FROM metaux";
		$this->data = $this->sendRqt($r);
		return $this->data;
	}
	/*
		rqt system de gestion
	*/
	public function sendRqt($rqt) // send a rqt
	{
		$this->endData();
		$this->data = $this->bdd->query($rqt);
		return $this->data;
	}
	public function connexion() // connexion to the dataBase
	{
		try
		{
			$this->bdd = new PDO('mysql:host=localhost;dbname=bijoux;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
	}
	public function endData() // close the data array 
	{
		if($this->data!=NULL)
		{
			$this->data->closeCursor();
			$this->data=NULL;
		}
	}
	public function getRow() // get a row of data (NOT USE)
	{
		if($this->data!=NULL)
		{
			if($r=$data->fetch())
				return $r;
			else
			{
				$this->endData();
				$this->data=NULL;
				return NULL;
			}
		}
		else
			return NULL;
	}
}

/*
	Connecion to the base
*/
$bd=new BaseDeDonne();
$bd->connexion();


/*
	Send eMail
*/
if(isset($_POST['message']) && isset($_POST['email']))
{	
	if(!mail(  $_POST['email'],"Message du site" , $_POST['message']))
		echo 'mailerror';
}
?>