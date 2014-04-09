<?php 
	include('config.php');

	$session = mysql_real_escape_string($_POST['s']);
	// $session = "x";

	$done = false;
	$sql = mysql_query("DELETE FROM storage WHERE _session='$session';") or die (mysql_error());
?>