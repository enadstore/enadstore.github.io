<?php

$cn=0;

if($cn==0) {	
  $DB_host = "localhost";
  $DB_user = "root";
  $DB_pass = "";
  $DB_name = "e_store";
  //$DB_name = "live";
} else if($cn==1) {		
  $DB_host = "localhost";
	$DB_user = "id11392055_user";
	$DB_pass = "xyrupp5115";
	$DB_name = "id11392055_jstore";
} else if($cn==2) {	
	$DB_host = "ricky.heliohost.org";
	$DB_user = "updesk_ujstore";
	$DB_pass = "xyrupp5115";
	$DB_name = "updesk_jeffstore";
}

try {
  $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass); 
  $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "ERROR : ".$e->getMessage();
}
?>
