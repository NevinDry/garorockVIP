<?php 
function getUsers($team)
{
$fichierUser = 'users.csv';
if(!$handle = fopen($fichierUser, 'r')){
	echo"Erreur";
	exit;
}else{
	print_r($handle);
	
		$length = 1000;
		$delimiter = ";";
		echo "<table>\n";
		echo "<td><b>Name</b></td><td><b>Surname</b></td><td><b>Email</b></td>";
	
		$i = 0; 
		while (($data = fgetcsv( $handle, $length, $delimiter)) !== FALSE )
		{
			echo"cool";
			if( $i == 0 || $i == 3 ) // ADDED
			{
				$num = count($data);
				echo "<tr>\n";
	
				for ($c=0; $c < $num; $c++)
				{
				echo "<td>".$data[$c]."</td>\n";
				}
						echo "</tr>\n";
			}
			$i++; // ADDED
		}
		echo "</table>";
		fclose($handle);
	}

	
}
?>