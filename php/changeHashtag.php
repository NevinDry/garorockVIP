<?php 
if(isset($_GET["hash1"]))
{
   $hash1= $_GET["hash1"];
}


//R�cup�ration des hashtags
$handle = fopen('hashtag.txt', 'w');
ftruncate($handle,0);

//R��criture 
$fp = fopen("hashtag.txt","a"); // ouverture du fichier en �criture
fputs($fp, $hash1);
fclose($fp);

?>