<?php 

	// on se connecte � MySQL 
	$db = mysql_connect('localhost', 'root', ''); 
	// connexion � la base echo $nomBD;
	mysql_select_db("spip",$db); 
	
?>