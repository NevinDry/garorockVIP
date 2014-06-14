<?php 
if(isset($_GET["hash1"]))
{
   $hash1= $_GET["hash1"];
}


//Supréssion
$handle = fopen('hashtag.txt', 'w');
ftruncate($handle,0);

//Réécriture 
$fp = fopen("hashtag.txt","a"); // ouverture du fichier en écriture
fputs($fp, $hash1);
fclose($fp);

?>