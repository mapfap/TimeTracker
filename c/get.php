<?php 
	include('config.php');

	$key = mysql_real_escape_string($_POST['name']);
	$session = mysql_real_escape_string($_POST['s']);
	// $session = "x";

	$sql = mysql_query("SELECT _value FROM storage WHERE _key='$key' AND _session='$session';") or die (mysql_error());
	while($row = mysql_fetch_array($sql)) {
		echo $row['_value'];	
	}
	echo "";
?>