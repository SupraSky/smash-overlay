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
	$player1 = array();
	$player2 = array();
	$tournament = array();
	$scores = array();
	$styles = array();
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
	
	$styles['players'] = fgets($filero);
	$styles['tournament'] = fgets($filero);
	$styles['font'] = fgets($filero);
	
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
			<td><img id="P1Country" class="Flag" src=<?php echo "\"assets/flags/".chop($player1['country'],"\n")."\"" ?>/></td>
			<td class="Tag"   id="P1Tag"    ><?php echo $player1['tag'] ?></td>
			<td class="Separator" >|</td>
			<td class="Name"  id="P1Name"   ><?php echo $player1['name'] ?></td>
			<td class="Score" id="P1Score"  ><?php echo $scores['p1'] ?></td>
			<td class="TourInfo" id="TourName"></td>
			<td class="Score" id="P2Score"  ><?php echo $scores['p2'] ?></td>
			<td class="Tag"   id="P2Tag"    ><?php echo $player2['tag'] ?></td>
			<td class="Separator" >|</td>
			<td class="Name"  id="P2Name"   ><?php echo $player2['name'] ?></td>
			<td><img id="P2Country" class="Flag" src=<?php echo "\"assets/flags/".chop($player2['country'],"\n")."\"" ?>/></td>
		</tr>
	</table>
	
	<script>
		//Trouver la longueur la plus logue et ajuster la taille de la box
		if (<?php echo strlen($tournament['name'])?> > <?php echo strlen($tournament['set'])?> ) {
			let tdwidth = <?php echo strlen($tournament['name'])?>*17;
			document.getElementById("TourName").style.width = tdwidth+"px";
		}
		else {
			let tdwidth = <?php echo strlen($tournament['set'])?>*17;
			document.getElementById("TourName").style.width = tdwidth+"px";
		}
		//Lancement de la rotation du nom du tournoi/nom du set
		setName();
		
		//Chargement des couleurs personnalisées
		document.getElementById("tab1").style.backgroundColor =<?php echo "\"#".chop($styles['players'],"\n")."\""; ?>;
		document.getElementById("TourName").style.backgroundColor =<?php echo "\"#".chop($styles['tournament'],"\n")."\""; ?>;
		document.getElementById("tab1").style.color = <?php echo "\"#".chop($styles['font'],"\n")."\""; ?>;

		function setName() {
			document.getElementById("TourName").innerHTML = <?php echo "\"".chop($tournament['name'],"\n")."\""; ?>;
			setTimeout(setSet, 3000)
		}
		function setSet() {
			document.getElementById("TourName").innerHTML = <?php echo "\"".chop($tournament['set'],"\n")."\""; ?>;
			setTimeout(setName, 3000)
		}
	</script>

</body>

