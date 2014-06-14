<?php 


function getUsers($team)
{
    $currentTeam = "team".$team;
    $row = 1;
    if (($handle = fopen("php/users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);

                    //echo "<p> $num fields in line $row: <br /></p>\n";
                    $row++;
                    if($data[2] == $currentTeam){
                            echo($data[0]." (@".$data[1].")<br/>");
                    }
            }
            fclose($handle);
    }
}


function getAllUsers(){
    $row = 1;
    if (($handle = fopen("../php/users.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);
                    $users .= $data[2].';'.$data[0].';'.$data[1].'NEWLINE';
                    //echo "<p> $num fields in line $row: <br /></p>\n";
                    $row++;
                    
            }
            fclose($handle);
    }
    return $users;
}
?>