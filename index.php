<?php

	

	if (isset($_POST['Dier'])) {
		$Dieren = $_POST["Dier"];
	}

	if (isset($_POST['Personen'])) {
		$Personen = $_POST["Persoon"];
	}

	if (isset($_POST['Land'])) {
		$Landen = $_POST["Land"];
	}

	if (isset($_POST['Verveeld'])) {
		$Vervelen = $_POST["Verveeld"];
	}

	if (isset($_POST['Speelgoed'])) {
		$Speelgoederen = $_POST["Speelgoed"];
	}

	if (isset($_POST['Spijbel'])) {
		$Spijbelen = $_POST["Spijbel"];
	}

	if (isset($_POST['Geld'])) {
		$Money = $_POST["Geld"];
	}

	if (isset($_POST['Bezigheid'])) {
		$Bezigheden = $_POST["Bezigheid"];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="opmaak.css">
</head>
<body>
<p id="title">Mad Libs</p>
 	<div id="container">
 	<div id="header">
 		<a href="index.php">Er heerst paniek...</a>
 		<a href="onkunde.php" id="onkunde">Onkunde</a>
 	</div>
 		<p id="kopje">Er heerst paniek...</p>
	<form action="paniek.php" method="post"> 				
				<input id="input_0" type="text" name="Dier">
 				<p class="vragen" id="vraag_1">Welk dier zou je nooit als huisdier willen hebben?</p> 
 				<input id="input_1" type="text" name="Persoon">
 				<p class="vragen" id="vraag_2">Wie is de belangrijkste persoon in je leven?</p> 
 				<input id="input_2" type="text" name="Land">
 				<p class="vragen" id="vraag_3">In welk land zou je graag willen wonen?</p> 
 				<input id="input_3" type="text" name="Verveeld">
 				<p class="vragen" id="vraag_4">Wat doe je als je je verveeld?</p> 
 				<input id="input_4" type="text" name="Speelgoed">
 				<p class="vragen" id="vraag_5">Met welk speelgoed speelde je als kind het meest?</p> 
 				<input id="input_5" type="text" name="Spijbel">
 				<p class="vragen" id="vraag_6">Bij welke docent spijbelde je het liefst?</p> 
 				<input id="input_6" type="text" name="Geld">
 				<p class="vragen" id="vraag_7">Als je €100.000,- had wat zou je dan kopen?</p> 
 				<input id="input_7" type="text" name="Bezigheid">
 				<p class="vragen" id="vraag_8">Wat is je favoriete bezigheid??</p> 
 				<input id="send" type="submit" name="Verzenden" >
 			</form>
 	<footer>
		<p id="copyright">Made by Lars Smid</p>
	</footer>	
	</div> 

</body>
</html>