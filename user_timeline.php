<?php
	$facebookUser = $_GET['facebook_id'];
	$facebookToken = $_GET['facebook_token'];
	
	$postArray = array();
	$timeArray = array();
	$typeArray = array();
	
	$facebookUrl = "https://graph.facebook.com/$facebookUser/home?access_token=$facebookToken&count=200";
	
	$fbHome = curl_init();
	curl_setopt($fbHome, CURLOPT_URL, $facebookUrl);
	curl_setopt($fbHome, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($fbHome);
	$decoded = json_decode($response);
	var_dump($decoded);
?>
