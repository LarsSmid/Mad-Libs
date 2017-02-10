<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<link rel="stylesheet" type="text/css" href="opmaak.css">
</head>
<body>
<p id="title">Mad Libs</p>
	<div id="container">
 	
 	<div id="header">
 		<a href="index.php">Er heerst paniek...</a>
 		<a href="onkunde.php" id="onkunde">Onkunde</a>
 	</div>
 	
 	<p id="titel_tekst">Er heerst paniek...</p>
 	
 	<p id="php">
 	
 	<?php
		echo "Er heerst paniek in het koningkrijk ". $_POST['Land']. ". Koning " . $_POST['Spijbel'] . " is ten einde raad en als koning " . $_POST['Spijbel'] . " ten einde raad is, dan roep hij zijn ten-einde-raadsheer " . $_POST['Persoon'] . ".";
	?>
	
	<br>
	<br>
	
	<?php
		echo '"' . $_POST['Persoon'] . '! Het is een ramp! Het is een schade!"' ;
	?>
	
	<br>
	<br>
	
	<?php
		echo '"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"';
	?>
	
	<br>
	<br>

	<?php
		echo '"Mijn '  . $_POST['Dier'] . ' is verdwenen! Zo maar zonder waarschuwing. En ik had net '  . $_POST['Speelgoed'] . ' voor hem gekocht!"' ;
	?>

	<br>
	<br>

	<?php
		echo '"Majesteit, uw '  . $_POST['Dier'] . ' komt vast vanzelf weer terug?' ;
	?>

	<br>
	<br>

	<?php
		echo '"Ja, dat is leuk en aardig, maar hoe moet ik in de tussentijd '  . $_POST['Bezigheid'] . ' leren"';
	?>

	<br>
	<br>

	<?php 
		echo '"Maar Sire, daar kunt u toch uw '  . $_POST['Speelgoed'] . ' voor gebruiken."';
	 ?>

	 <br>
	 <br>

	 <?php 
	 	echo '"'  . $_POST['Persoon'] . ', je hebt helemaal gelijk! Wat zou ik doe als ik jou niet had."';
	  ?>

	  <br>
	  <br>

	  <?php
	  	echo '"'  . $_POST['Verveeld'] . ', sire"';
	  ?>
	</p>
 	</div>
</body>
</html>
