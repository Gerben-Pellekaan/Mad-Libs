<?php
		if(isset($_POST['versturen'])){

		$willen_kunnen		 =trim($_POST["willen-kunnen"]);
		$persoon_opschieten	 =trim($_POST["persoon-opschieten"]);
		$favGetal			 =trim($_POST["favGetal"]);
		$vakantie			 =trim($_POST["vakantie"]);
		$besteEigenschap	 =trim($_POST["besteEigenschap"]);
		$slechtsteEigenschap =trim($_POST["slechtsteEigenschap"]);
		$ergsteOverkomen	 =trim($_POST["ergsteOverkomen"]);

		if ($willen_kunnen == ""){
			$errors = 1;
		}
		elseif ($persoon_opschieten == ""){
			$errors = 1;
		}
		elseif ($favGetal == ""){
			$errors = 1;
		}
		elseif ($vakantie == ""){
			$errors = 1;
		}
		elseif ($besteEigenschap == ""){
			$errors = 1;
		}
		elseif ($slechtsteEigenschap == ""){
			$errors = 1;
		}
		elseif ($ergsteOverkomen == ""){
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
	<title>Mad Libs - Onkunde</title>
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
			<h2>Onkunde</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"] === "POST" && $errors == 0){
					echo "Er zijn veel mensen die niet kunnen ".$_POST['willen-kunnen'].". Neem nou ".$_POST['persoon-opschieten'].". Zelfs met de hulp van een ".$_POST['vakantie']." of ".$_POST['favGetal']." kan ".$_POST['persoon-opschieten']." niet ".$_POST['willen-kunnen'].". Dat heeft te maken met een gebrek aan ".$_POST['besteEigenschap'].", maar met een te veel aan ".$_POST['slechtsteEigenschap'].". Te veel ".$_POST['slechtsteEigenschap']." leidt tot ".$_POST['ergsteOverkomen']." en dat is niet goed als je wilt ".$_POST['willen-kunnen'].". Helaas voor ".$_POST['persoon-opschieten'];
				}

				else
					include("includes/onkunde-form.php");
			?>
		</div>
		<div id="footer">© Gerben Pellekaan - 2021</div>
	</div>
</body>
</html>