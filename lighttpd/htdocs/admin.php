<!DOCTYPE html>

<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>ADMIN Overlay Smash By SupraSky</title>
	<link rel="stylesheet" href="./assets/admin.css" />
	<!-- <script src="./assets/functions.js"></script> -->
	
</head>

<body>
	<?php
	function getData($line) {
		$filero = fopen("assets/OverlayData.txt", "r");
		for($x = 0; $x != $line; $x++) {
			fgets($filero);
		}
		echo fgets($filero);
		fclose($filero);
	}
	// if ($_SERVER["REQUEST_METHOD"] == "GET") {
		// copy("assets/OverlayData.txt","assets/OverlayData_buffer.txt");
		// $filereset = fopen("assets/OverlayData.txt", "w");
		// fwrite($filereset," \n \n \n \n \n \n \n \n \n \n \n \n");
		// fclose($filereset);
	// }
	?>
	<!--<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>"> -->
	<!--	<input id="reset" type="submit"value="RESET"> -->
	<!-- </form> -->
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
				<td style="width:33%"><label for="p1name">Pseudo : </label></td>
				<td style="width:33%"><label for="p1flag">Pays : </label></td>
			</tr>
			<tr>
				<td><input type="text" id="p1tag" name="p1tag" value="<?php getData(2) ?? ""?>"></td>
				<td><input type="text" id="p1name" name="p1name" value="<?php getData(4) ?? ""?>"></td>
			
			<td>
				<select id="p1flag" name="p1flag">
					<option value="France">France</option>
					<option value="Belgique">Belgique</option>
					<option value="Bretagne">Bretagne</option>
					<option value="OM">OM</option>
					<option value="None" selected>None</option>
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
				<td style="width:33%"><label for="p2name">Pseudo : </label></td>
				<td style="width:33%"><label for="p2flag">Pays : </label></td>
			</tr>
			<tr>
				<td><input type="text" id="p2tag" name="p2tag" value="<?php getData(3) ?? ""?>"></td>
				<td><input type="text" id="p2name" name="p2name" value="<?php getData(5) ?? ""?>"></td>
			
			<td>
				<select id="p2flag" name="p2flag">
					<option value="France">France</option>
					<option value="Belgique">Belgique</option>
					<option value="Bretagne">Bretagne</option>
					<option value="OM">OM</option>
					<option value="None" selected>None</option>
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
		<input type="submit" value="Mettre à jour" >
	</form>
</body>
</html>