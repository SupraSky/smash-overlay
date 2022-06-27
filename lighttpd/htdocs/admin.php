<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Admin Overlay Smash By SupraSky</title>
	<link rel="stylesheet" href="./assets/admin.css" />
</head>
<body>
	<form action="./updateData.php" method="POST" target="_top">
		<fieldset>
		<legend>Tournament</legend>
		<table>
			<tr>
				<td><label for="tourName">Tournament Name </label></td>
				<td><label for="tourSet">Set Name </label></td>
			</tr>
			<tr>
				<td><input type="text" id="tourName" name="tourName" value="<?php getData(6) ?? ""?>" autofocus></td>
				<td><input type="text" id="tourSet" name="tourSet" value="<?php getData(7) ?? ""?>"></td>
			</tr>
		</table>
		</fieldset>
		
		<fieldset>
		<legend>Player 1</legend>
		<table>
			<tr>
				<td style="width:33%"><label for="p1tag">Tag : </label></td>
				<td style="width:33%"><label for="p1name">Name : </label></td>
				<td style="width:33%"><label for="p1flag">Country : </label></td>
			</tr>
			<tr>
				<td><input type="text" id="p1tag" name="p1tag" value="<?php getData(2) ?? ""?>"></td>
				<td><input type="text" id="p1name" name="p1name" value="<?php getData(4) ?? ""?>"></td>
			
			<td>
				<select id="p1flag" name="p1flag">
					<?php getFlags(1) ?>
					<!-- <option value="France">France</option> -->
					<!-- <option value="Belgique">Belgique</option> -->
					<!-- <option value="Bretagne">Bretagne</option> -->
					<!-- <option value="OM">OM</option> -->
					<!-- <option value="None" selected>None</option> -->
				</select>
			</td>
			</tr>
		</table>
		</fieldset>
		
		<fieldset>
		<legend>Player 2</legend>
		<table>
			<tr>
				<td style="width:33%"><label for="p2tag">Tag : </label></td>
				<td style="width:33%"><label for="p2name">Name : </label></td>
				<td style="width:33%"><label for="p2flag">Country : </label></td>
			</tr>
			<tr>
				<td><input type="text" id="p2tag" name="p2tag" value="<?php getData(3) ?? ""?>"></td>
				<td><input type="text" id="p2name" name="p2name" value="<?php getData(5) ?? ""?>"></td>
			
			<td>
				<select id="p2flag" name="p2flag">
					<?php getFlags(2) ?>
					<!-- <option value="France">France</option> -->
					<!-- <option value="Belgique">Belgique</option> -->
					<!-- <option value="Bretagne">Bretagne</option> -->
					<!-- <option value="OM">OM</option> -->
					<!-- <option value="None" selected>None</option> -->
				</select>
			</td>
			</tr>
		</table>
		</fieldset>
		<fieldset>
		<legend>Score</legend>
		<table>
			<tr>
				<td><label for="p1score">Player 1</label></td>
				<td><label for="p2score">Player 2</label></td>
			</tr>
			<tr>
				<td><input type="text" id="p1score" name="p1score" value="<?php getData(8) ?? ""?>"></td>
				<td><input type="text" id="p2score" name="p2score" value="<?php getData(9) ?? ""?>"></td>
			</tr>
			<tr>
				<label>Swap Sides ?</label>
				<input type="radio" id="swapyes" name="swap" value="Yes">
				<label for="swapyes" style="font-family:'Montserrat Thin'">Yes</label>
				<input type="radio" id="swapno" name="swap" value="No" checked>
				<label for="swapno" style="font-family:'Montserrat Thin'">No</label>
			</tr>
		</table>
		</fieldset>
		<input type="submit" value="Update Overlay" >
		<fieldset>
			<legend>Color personalization (Use HEX values)</legend>
		<table id="colors">
			<tr>
				<td><label for="colorplayer">Players : </label></td>
				<td ><label for="colortour">Tournament : </label></td>
				<td ><label for="colortext">Text : </label></td>
			</tr>
			<tr>
				<td style="width:33%">
					<input type="text" id="colorplayer" name="colorplayer" value="<?php getData(11) ?? ""?>">
					<p style="background-color:<?php echo "#";getData(11) ?? "" ?>;color:<?php echo "#";getData(13) ?? "" ?>">Player 1</p>
				</td>
				<td style="width:33%">
					<input type="text" id="colortour" name="colortour" value="<?php getData(12) ?? ""?>">
					<p style="background-color:<?php echo "#";getData(12) ?? "" ?>;color:<?php echo "#";getData(13) ?? "" ?>">Tournament</p>
				</td>
				<td style="width:33%">
					<input type="text" id="colortext" name="colortext" value="<?php getData(13) ?? ""?>">
					<p style="background-color:<?php echo "#";getData(11) ?? "" ?>;color:<?php echo "#";getData(13) ?? "" ?>">Player 2</p>
				</td>
			</tr>
			
		</table>	
		</fieldset>
	</form>
	
	<script>
	//Cacher le panel couleurs persos
	function togglePanel() {
	var x = document.getElementById("colors");
		if (x.style.display == "none") {
		x.style.display = "table";
		}
	}
	function defaultColor() {
		document.getElementById("colors").style.display = "none";
	}	
	</script>
	
	<?php
	function getData($line) {
		$filero = fopen("assets/OverlayData.txt", "r");
		for($x = 0; $x != $line; $x++) {
			fgets($filero);
		}
		echo fgets($filero);
		fclose($filero);
	}
	function getFlags($player) {
		$flags= glob("assets/flags/*.png");
		if( $player == 1 ) {
			$filero = fopen("assets/OverlayData.txt", "r");
			$oldvalue = fgets($filero);
			fclose($filero);
		}
		else {
			$filero = fopen("assets/OverlayData.txt", "r");
			fgets($filero);
			$oldvalue = fgets($filero);
			fclose($filero);
		}
		foreach ($flags as $value) {
			$value = substr($value,13);
			$text = ucfirst(strtolower(chop($value,".png")));
			if ( $oldvalue == $value."\n" ) {
				echo "\t\t\t\t\t<option value=\"".$value."\" selected >".$text."</option>\n";
			}
			else {
				echo "\t\t\t\t\t<option value=\"".$value."\" >".$text."</option>\n";
			}
		}
	}
	?>
</body>
</html>