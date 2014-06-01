<?php 
if(isset($_GET["twitName"]))
{
   $twitName = $_GET["twitName"];
}

if(isset($_GET["nom"]))
{
	$nom = $_GET["nom"];
} 

if(isset($_GET["team"]))
{
	$team = $_GET["team"];
}

$varForCsv = $nom.";".$twitName.";".$team."\r\n";

$fichierUser = 'users.csv';

if(!$fp = fopen($fichierUser, 'a')){
	exit;
} else {
	echo $nom." (@".$twitName.")<br/>";
	fwrite($fp, $varForCsv);
	fclose($fp);
}

?>