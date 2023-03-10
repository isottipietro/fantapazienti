<!DOCTYPE html>
<html lang="it">
<head>
	<?php include 'etc/settings.inc'; ?>
	<title><?php echo $site_title; ?> v.<?php echo $site_version; ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
	<script src="src/menubar.js" defer></script>
	<script src="src/collapsible.js" defer></script>
</head>
<body>
	<?php
	session_start();

	if (isset($_SESSION['session_id'])) {
    	$session_username = htmlspecialchars($_SESSION['session_username'], ENT_QUOTES, 'UTF-8');
    	$session_id = htmlspecialchars($_SESSION['session_id']);
	} else {
		$msg = urlencode("Devi effettuare il login per poter accedere al FantaRia");
		header("Location: /welcome.php?Message=".$msg);
	}?>