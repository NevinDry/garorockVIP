<?php 
if(isset($_GET["userToRemove"]))
{
	removeUser();
	
}
elseif(isset($_GET["twitName"])){
	addUser();
}

function drawTable(){
	$row = 1;
	if (($handle = fopen("../php/users.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
			$num = count($data);

			//echo "<p> $num fields in line $row: <br /></p>\n";
			$row++;
			echo( '<tr> <td>'.$data[2].'</td> <td>'.$data[0]."</td> <td>@".$data[1].'</td> <td> <button type="button" value="'.$data[1].'" class="btn btn-danger remUser">X</button></tr>');
		}
		fclose($handle);
	}
}


function removeUser(){
	$userToRemove= $_GET["userToRemove"];
	if (($handle = fopen("users.csv", "r")) !== FALSE) {
		$row = 0;
		while (($data = fgetcsv($handle, 1000, ";")) !== FALSE){
			$users[$row][0] = $data[0];
			$users[$row][1] = $data[1];
			$users[$row][2] = $data[2];
			$row++;
		}
		fclose($handle);
	}
	
	$fp = fopen('users.csv', 'w');
	ftruncate($fp,0);
	
	$fichierUser = 'users.csv';
	
	if(!$fp = fopen($fichierUser, 'a')){
		exit;
	} else {
		foreach($users as $user){
			if($user[1] != $userToRemove){
				$varForCsv = $user[0].";".$user[1].";".$user[2]."\r\n";
				fwrite($fp, $varForCsv);
				echo ($user[1]);
			}
		}
		fclose($fp);
	}
	drawTable();

}


function addUser(){
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
}

?>