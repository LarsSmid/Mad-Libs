<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<link rel="stylesheet" type="text/css" href="opmaak.css">
</head>
<body>
<p id="title_2">Mad Libs</p>
	<div id="container_2">
 	
 	<div id="header">
 		<a href="index.php">Er heerst paniek...</a>
 		<a href="onkunde.php" id="onkunde">Onkunde</a>
 	</div>
 	
 	<p id="titel_tekst">Onkunde</p>
 	
 	<p id="php">
 	
 	<?php
 		echo "Er zijn veel mensen die niet kunnen " . $_POST['Kunnen'] . ", neem nou " . $_POST['Maat'] . ". Zelfs met de hulp van een " . $_POST['Vakantie'] . " of zelfs " . $_POST['Getal'] . " kan " . $_POST['Maat'] . " niet " . $_POST['Kunnen'] .". Dat heeft niet te maken met een gebrek aan " . $_POST['Goede'] . ", maar met een te veel aan " . $_POST['Slechte'] . ". te veel " . $_POST['Slechte'] . " leidt tot " . $_POST['Overkomen'] . " en dat is niet goed als je wilt " . $_POST['Kunnen'] . ". Helaas voor " . $_POST['Maat'] . ".";
 	?>
	</p>
		<footer >
		<p id="copyright">Made by Lars Smid</p>
	</footer>
 	</div>

</body>
</html>
