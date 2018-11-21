<?php
require ("add_user.fonc.php");


 if(isset($_POST["register"])){
	add_user($_POST['login'], $_POST['password'],"active", $bdd);
}
elseif (isset($_POST["register"])) {
	info_exist($_POST['login'], $_POST['password'], $bdd);
}