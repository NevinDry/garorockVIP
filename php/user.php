<?php 

if(isset($_GET["mail"]))
{
   $mail = $_GET["mail"];
}

if(isset($_GET["nom"]))
{
	$nom = $_GET["nom"];
} 

if(isset($_GET["team"]))
{
	$team = $_GET["team"];
}

print_r($team." ".$mail." ".$nom);
?>