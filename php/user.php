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

$varForCsv = $nom.";".$mail.";".$team.";\r\n";

$fichierUser = '../users.csv';

if(!$fp = fopen($fichierUser, 'a')){
	exit;
} else {
	echo "good";
	fwrite($fp, $varForCsv);
}

?>