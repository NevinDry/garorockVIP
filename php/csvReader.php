<?php
	
	function GetCsv(){
		$file = '../users.csv';
		$currentData = file_get_contents($file);
		$lines = split("\n",$currentData);
		
		return $lines;
	}
?>