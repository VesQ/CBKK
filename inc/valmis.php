<?php
	$type = $_GET['t'];
	
	if ($type == 1) {
		echo "<h1>Rekister�ityminen onnistui!</h1>";
		echo "<h2>Tarkista s�hk�postisi aktivoidaksesi tunnuksesi.</h2>";
	} elseif ($type == 2) {
		echo "<h1>Tunnus aktivoitu!</h1>";
		echo "<h2>Voit nyt kirjautua sis��n sivun vasemmasta laidasta.</h2>";
	}
?>