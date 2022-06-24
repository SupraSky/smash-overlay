<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Overlay Smash by SupraSky</title>
	<link rel="stylesheet" href="./assets/Overlay.css" />
	<!-- <script src="./assets/functions.js"></script> -->
</head>

<body>
	<?php
	$player1 = array();//"country"=>"None","tag"=>"T1","name"=>"Mkleo");
	$player2 = array();//"country"=>"None","tag"=>"SLY","name"=>"Glutonny");
	$tournament = array();//"name"=>"Pound 2022","set"=>"Grand Finals");
	$scores = array();//"p1score"=>"0","p2score"=>"0");
	$swapped;
	$playertemp = array();
	$scoretemp = array();
	
	$filero = fopen("assets/OverlayData.txt", "r");
	$player1['country'] = fgets($filero);
	$player2['country'] = fgets($filero);
	$player1['tag'] = fgets($filero);
	$player2['tag'] = fgets($filero);
	$player1['name'] = fgets($filero);
	$player2['name'] = fgets($filero);
	$tournament['name'] = fgets($filero);
	$tournament['set'] = fgets($filero);
	$scores['p1'] = fgets($filero);
	$scores['p2'] = fgets($filero);
	$swapped = fgets($filero);
	if ( $swapped == "Yes" ) {
		$playertemp = $player1;
		$player1 = $player2;
		$player2 = $playertemp;
		$scoretemp =  $scores['p1'];
		$scores['p1'] = $scores['p2'];
		$scores['p2'] = $scoretemp;
	}
	fclose($filero);
	?>
	
	<table id="tab1">
		<tr>
			<td><img id="P1Country" class="Flag" src=/></td>
			<td class="Tag"   id="P1Tag"    ><?php echo $player1['tag'] ?></td>
			<td class="Separator" >|</td>
			<td class="Name"  id="P1Name"   ><?php echo $player1['name'] ?></td>
			<td class="Score" id="P1Score"  ><?php echo $scores['p1'] ?></td>
			<td class="TourInfo" id="TourName"></td>
			<td class="Score" id="P2Score"  ><?php echo $scores['p2'] ?></td>
			<td class="Tag"   id="P2Tag"    ><?php echo $player2['tag'] ?></td>
			<td class="Separator" >|</td>
			<td class="Name"  id="P2Name"   ><?php echo $player2['name'] ?></td>
			<td><img id="P2Country" class="Flag" src=/></td>
		</tr>
	</table>
	<!-- <table id="tab2"> -->
		<!-- <tr> -->
			<!-- <td class="TourInfo" id="SetName"></td> -->
		<!-- </tr> -->
	<!-- </table> -->
	<!-- <p id="test"></p> -->
	<!-- <div id="P1Ingame"></div> -->
	<!-- <div id="P2Ingame"></div> -->
	

	
	<script>


		let p1country = <?php echo "\"".chop($player1['country'],"\n")."\""; ?>;
		let p2country = <?php echo "\"".chop($player2['country'],"\n")."\""; ?>;
		switch (p1country) {
			case "France":
				document.getElementById("P1Country").src = "./assets/FRANCE.png";
				break;
			case "Belgique":
				document.getElementById("P1Country").src = "./assets/BELGIUM.png";
				break;
			case "OM":
				document.getElementById("P1Country").src = "./assets/OM.png";
				break;
			case "Bretagne":
				document.getElementById("P1Country").src = "./assets/BREIZH.png";
				break;
			case "None":
				document.getElementById("P1Country").src = "./assets/None.png";
				break;
			default:
				document.getElementById("P1Country").src = "./assets/None.png";
		}


		switch (p2country) {
			case "France":
				document.getElementById("P2Country").src = "./assets/FRANCE.png";
				break;
			case "Belgique":
				document.getElementById("P2Country").src = "./assets/BELGIUM.png";
				break;
			case "OM":
				document.getElementById("P2Country").src = "./assets/OM.png";
				break;
			case "Bretagne":
				document.getElementById("P2Country").src = "./assets/BREIZH.png";
				break;
			case "None":
				document.getElementById("P2Country").src = "./assets/None.png";
				break;
			default:
				document.getElementById("P2Country").src = "./assets/None.png";
		}

		setName();
		function setName() {
			document.getElementById("TourName").innerHTML = <?php echo "\"".chop($tournament['name'],"\n")."\""; ?>;
			setTimeout(setSet, 20000)
		}
		function setSet() {
			document.getElementById("TourName").innerHTML = <?php echo "\"".chop($tournament['set'],"\n")."\""; ?>;
			setTimeout(setName, 15000)
		}
	</script>

</body>

