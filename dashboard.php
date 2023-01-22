<?php include 'src/head.php';?>
<?php $pageName = "Dashboard";?>
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
