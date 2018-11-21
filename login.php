<?php

require_once ('sql.php');
session_start();

if (isset($_POST['submit']))
{
	$requete = $bdd->prepare("SELECT * FROM ".$bdd.".".$utilisateur." WHERE login = :login");
	$requete->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
	$requete->execute();
	$donnee = $requete->fetch();
	
	if ($donnee['password'] == ($_POST['password']))
	{
		$_SESSION['login'] = $donnee['login'];
		$_SESSION['id'] = $donnee['id'];
		?>
		<script>
			alert('Identifiant ou mot de passe correct.'); 
			window.location.href = "index.php";
		</script>
		<?
	}
	else
	{
		?>  <script>
			alert('Identifiant ou mot de passe incorrect.'); 
			window.location.href = "index.php";
		</script>
		<?php
	}

	$requete->CloseCursor();
}

?>