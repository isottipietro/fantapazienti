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
	}
	$pageName = "Dashboard";?>
	<?php include 'src/sidebar.php'; ?>
	<?php include 'src/header.php'; ?>
	<div id="page">
	<div id="dashboard">
		<div id="dashboard-head">
		<h1><?php printf("Ciao %s, benvenuto in FantaRia", $session_username);?></h1>
		<p>Prima regola della FantaRia: non si parla della FantaRia<br>Seconda regola della FantaRia: <?php echo $saggezza[array_rand($saggezza)]; ?></p>
</div>
	<div id="nav">
		<button class="tablink" onclick="openPage('Singola', this, 'white')" id="defaultOpen">Reparto</button>
		<button class="tablink" onclick="openPage('Intubazione', this, 'white')">Classifica</button>
		<button class="tablink" onclick="openPage('About', this, 'white')">Proiezioni</button>
		<button class="tablink" onclick="openPage('Registry', this, 'white')">Regolamento</button>
	</div>
	<div id="Singola" class="tabcontent">
		<?php include 'src/single-form.php';?>
	</div>

	<div id="Intubazione" class="tabcontent">
		<?php include 'src/iot-form.php'; ?>
	</div>

	<div id="About" class="tabcontent">
		<?php include 'src/about.php' ?>
	</div>

	<div id="Registry" class="tabcontent">
		<?php include 'src/patient-registry.php' ?>
	</div>

</div>
  <?php include 'src/footer.php';?>
</div>
</body>
</html>
