<?php
	
	$idtwitter = $_POST['idtwitter'];
	$name = $_POST['name'];
	$team = $_POST['team'];

	$constructCsv = $idtwitter.';'.$name.';'.$team."\n";
	
	$file = '../users.csv';
	$currentData = file_get_contents($file);
	$currentData .= $constructCsv;
	file_put_contents($file, $currentData);
	
	echo 'Debug Data : <br>' .$currentData;
?>