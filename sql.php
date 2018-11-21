<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sante;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>