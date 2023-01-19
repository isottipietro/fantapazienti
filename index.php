<!DOCTYPE html>
<html lang="it">
<head>
	<?php include 'etc/settings.inc'; ?>
	<title><?php echo $site_title; ?></title>
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
    	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
    	$session_id = htmlspecialchars($_SESSION['session_id']);
	
    printf("Benvenuto %s, il tuo session ID è %s", $session_user, $session_id);
    echo "<br>";
    printf("%s", '<a href="logout.php">logout</a>');
} else {
    printf("Effettua il %s per accedere all'area riservata", '<a href="../login.html">login</a>');
}
	?>	<div id="wrapper">
		<?php include 'src/header.php'; ?>
	<div id="nav">
		<button class="tablink" onclick="openPage('Singola', this, 'green')" id="defaultOpen">Etichetta Singola</button>
		<button class="tablink" onclick="openPage('Intubazione', this, 'green')">Intubazione</button>
		<button class="tablink" onclick="openPage('About', this, 'blue')">Istruzioni</button>
		<button class="tablink" onclick="openPage('Registry', this, 'blue')">Anagrafiche</button>
		<button class="tablink urg" onclick="window.open('/printer.php?set=urgent')">Urgenza!</button>
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
</body>
</html>
