<?php
require_once ('sql.php');

function add_user($login , $password, $statut, $bdd)
{
	if (info_exist($login, $bdd))
	{

		/*$requete = $bdd->prepare("INSERT INTO utilisateurs (login, password, statut) VALUES (".$login.",".$password.",".$statut");");*/
		$req = $bdd->prepare('INSERT INTO utilisateurs(login, password, statut) VALUES(:login, :password, :statut)');
		$req->execute(array( 'login' => $login, 'password' => $password, 'statut' => $statut));
		return true;
	}
	else
	{
		return false;
	}
}

function info_exist($login,, $pass = NULL,  $bdd)
{
	if(!isset($pass))
	{

	$req = $bdd->prepare('SELECT count(*) FROM utilisateurs WHERE login = :login');
	$req->execute(array("login"=>$login));
	}
	else
	{
			$req = $bdd->prepare('SELECT count(*) FROM utilisateurs WHERE login = :login, password = :password ');
			$req->execute(array("login"=>$login, "password" => $pass));
	}
		if ($req->fetch()[0] == "1")
		{
			return false;
		}
		else
		{
			return true;
		}
}


?>