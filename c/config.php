<?php
$host = 'localhost';
$username = 'mapfapcom_time';
$password = 'H4N-xAz-HuA-Y7n';
$database = 'mapfapcom_time';

$connection = mysql_connect ($host, $username, $password) or die (mysql_error());
mysql_select_db($database, $connection) or die(mysql_error());
mysql_query("SET NAMES utf8", $connection);
?>