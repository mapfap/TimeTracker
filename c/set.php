<?php 
	include('config.php');

	$key = mysql_real_escape_string($_POST['name']);
	// $value = mysql_real_escape_string($_POST['value']);
	$value = $_POST['value'];
	$session = mysql_real_escape_string($_POST['s']);
	// $session = "x";

	$done = false;
	$sql = mysql_query("SELECT _id FROM storage WHERE _key='$key' AND _session='$session';") or die (mysql_error());
	while($row = mysql_fetch_array($sql)) {
		$id = $row['_id'];
		$r = mysql_query("UPDATE storage SET _value='$value' WHERE _id='$id';") or die (mysql_error());
		$done = true;
	}
	if (!$done) {
		$sql = mysql_query("INSERT INTO storage(_key, _value, _session) VALUES ('$key', '$value', '$session')") or die (mysql_error());
	}
?>