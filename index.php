<?php
	if(isset($_POST['versturen'])){

		$errors		= 0;

		$huisdier	=trim($_POST["huisdier"]);
		$persoon	=trim($_POST["persoon"]);
		$land		=trim($_POST["land"]);
		$verveel	=trim($_POST["verveel"]);
		$speelgoed	=trim($_POST["speelgoed"]);
		$docent		=trim($_POST["docent"]);
		$geld		=trim($_POST["geld"]);
		$bezigheid	=trim($_POST["bezigheid"]);

		if ($huisdier == ""){
			$errors = 1;
		}
		elseif ($persoon == ""){
			$errors = 1;
		}
		elseif ($land == ""){
			$errors = 1;
		}
		elseif ($verveel == ""){
			$errors = 1;
		}
		elseif ($speelgoed == ""){
			$errors = 1;
		}
		elseif ($docent == ""){
			$errors = 1;
		}
		elseif ($geld == ""){
			$errors = 1;
		}
		elseif ($bezigheid == ""){
			$errors = 1;
		}
		else{
			$errors = 0;
		}
	}
?>
<!DOCTYPE html>
<html lang="nl">
<head>

	<meta charset="UTF-8">
	<title>Mad Libs - Paniek</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<h1 id="mad-libs">Mad Libs</h1>

	<div id="container">

		<div id="menu">
			<a href="index.php">Er heerst paniek...</a>
			<a href="onkunde.php">Onkunde</a>
		</div>

		<div id="vragenlijst">
			<h2>Er heerst paniek...</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST" && $errors == 0){
					echo "Er heerst paniek in het koninkrijk ".ucwords($_POST['land']).". Koning ".ucwords($_POST['docent'])." is ten einde raad en als koning ".ucwords($_POST['docent'])." ten einde raad is, dan roept hij zijn ten-einde-raadsheer ".ucwords($_POST['persoon']).".";
					echo "<br><br>";
					echo ucwords($_POST['persoon'])."! Het is een ramp! Het is een schande!";
					echo "<br><br>";
					echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?";
					echo "<br><br>";
					echo "Mijn ".strtolower($_POST['huisdier'])." is verdwenen! Zo maar, zonder waarschuwing. En ik had net ".strtolower($_POST['speelgoed'])." voor hem gekocht!";
					echo "<br><br>";
					echo "Majesteit uw ".strtolower($_POST['huisdier'])." komt vast vanzelf weer terug?";
					echo "<br><br>";
					echo "Ja da's leuk en aardig, maar hoe moet ik nu in de tussentijd ".strtolower($_POST['bezigheid'])." leren?";
					echo "<br><br>";
					echo "Maar Sire, daar kunt u toch uw ".strtolower($_POST['geld'])." voor gebruiken.";
					echo "<br><br>";
					echo ucwords($_POST['persoon']).", je hebt helemaal gelijk! Wat zou ik moeten doen als ik jou niet had.";
					echo "<br><br>";
					echo ucwords($_POST['verveel']).", Sire.";
				}

				else
					include("includes/index-form.php");
			?>
		</div>
		<div id="footer">© Gerben Pellekaan - 2021</div>
	</div>
</body>
</html>