<?php

	if (isset($_POST['Kunnen'])) {
		$Kennen = $_POST["Kunnen"];
	}

	if (isset($_POST['Maat'])) {
		$Vrienden = $_POST["Maat"];
	}

	if (isset($_POST['Getal'])) {
		$Getallen = $_POST["Getal"];
	}

	if (isset($_POST['Vakantie'])) {
		$Vakanties = $_POST["Vakantie"];
	}

	if (isset($_POST['Goede'])) {
		$Top = $_POST["Goede"];
	}

	if (isset($_POST['Minder'])) {
		$Min = $_POST["Minder"];
	}

	if (isset($_POST['Overkomen'])) {
		$Komen = $_POST["Overkomen"];
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
 		<p id="kopje">Onkunde</p>
	<form action="output.php" method="post"> 				
				<input id="input_0" type="text" name="Kunnen">

			<p class="vragen" id="vraag_1">Wat zou je graag willen kunnen?</p> 

 				<input id="input_1" type="text" name="Maat">

			<p class="vragen" id="vraag_2">Met welke persoon kun je goed opschieten?</p> 

 				<input id="input_2" type="text" name="Getal">

			<p class="vragen" id="vraag_3">Wat is favoriete getal?</p> 

 				<input id="input_3" type="text" name="Vakantie">

			<p class="vragen" id="vraag_4">Wat heb je altijd bij je als je op vakantie gaat?</p> 

 				<input id="input_4" type="text" name="Goede">

			<p class="vragen" id="vraag_5">Wat is je beste persoonlijke eigenschap?</p> 

 				<input id="input_5" type="text" name="Minder">

			<p class="vragen" id="vraag_6">Wat is je slechte persoonlijke eigenschap?</p> 

 				<input id="input_6" type="text" name="Overkomen">

			<p class="vragen" id="vraag_7">Wat is het ergste wat je kan overkomen?</p> 

 				<input id="send" type="submit" name="Verzenden" >
 			</form>
 			<br>
 			<br>
 	<footer >
		<p id="copyright">Made by Lars Smid</p>
	</footer>	
	</div> 

</body>
</html>