<?php 
	$token = md5(uniqid(mt_rand(), true));
	$token2 = md5(uniqid(mt_rand(), true));
	echo $token . "" . $token2;
?>