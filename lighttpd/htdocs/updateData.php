<?php
$player1 = array();//"country"=>"None","tag"=>"T1","name"=>"Mkleo");
$player2 = array();//"country"=>"None","tag"=>"SLY","name"=>"Glutonny");
$tournament = array();//"name"=>"Pound 2022","set"=>"Grand Finals");
$scores = array();//"p1score"=>"0","p2score"=>"0");
$styles = array();
$swapped;

copy("assets/OverlayData.txt","assets/OverlayData_buffer.txt");

$filero = fopen("assets/OverlayData_buffer.txt", "r");
$file = fopen("assets/OverlayData.txt", "w");

$filevalue = fgets($filero);
if ( $_POST['p1flag'] != 0 or $_POST['p1flag'] != $filevalue ) {
	$player1['country'] = $_POST['p1flag'];
	fwrite($file, $player1['country']."\n");
}
else {fgets($file); }
$filevalue = fgets($filero);
if ( $_POST['p2flag'] != 0 or $_POST['p2flag'] != $filevalue ) {
	$player2['country'] = $_POST['p2flag'];
	fwrite($file, $player2['country']."\n");
}
else {fgets($file); }
$filevalue = fgets($filero);
if ( $_POST['p1tag'] != "" or $_POST['p1tag'] != $filevalue ) {
	$player1['tag'] = $_POST['p1tag'];
	fwrite($file, $player1['tag']."\n");
}
else {fgets($file); }
$filevalue = fgets($filero);
if ( $_POST['p2tag'] != "" or $_POST['p2tag'] != $filevalue ) {
	$player2['tag'] = $_POST['p2tag'];
	fwrite($file, $player2['tag']."\n");
}
else {fgets($file); }	
$filevalue = fgets($filero);
if ( $_POST['p1name'] != "" or $_POST['p1name'] != $filevalue ) {
	$player1['name'] = $_POST['p1name'];
	fwrite($file, $player1['name']."\n");
}
else {fgets($file); }	
$filevalue = fgets($filero);
if ( $_POST['p2name'] != " " or $_POST['p2name'] != $filevalue ) {
	$player2['name'] = $_POST['p2name'];
	fwrite($file, $player2['name']."\n");
}
else {fgets($file); }	
$filevalue = fgets($filero);
if ( $_POST['tourName'] != " " or $_POST['tourName'] != $filevalue ) {
	$tournament['name'] = $_POST['tourName'];
	fwrite($file, $tournament['name']."\n");
}
else {fgets($file); }
$filevalue = fgets($filero);
if ( $_POST['tourSet'] != " " or $_POST['tourSet'] != $filevalue ) {
	$tournament['set'] = $_POST['tourSet'];
	fwrite($file, $tournament['set']."\n");
}
else {fgets($file); }

$filevalue = fgets($filero);
$scores['p1'] = $_POST['p1score'];
fwrite($file, $scores['p1']."\n");
$filevalue = fgets($filero);
$scores['p2'] = $_POST['p2score'];
fwrite($file, $scores['p2']."\n");

$filevalue = fgets($filero);
if ( $_POST['swap'] == "Yes") {
	$swapped= "Yes";
	fwrite($file, $swapped."\n");
}
else {
	$swapped= "No";
	fwrite($file, $swapped."\n");
}
$filevalue = fgets($filero);
if ( $_POST['colorplayer'] != 0 or $_POST['colorplayer'] != $filevalue ) {
	$styles['players'] = $_POST['colorplayer'];
	fwrite($file, $styles['players']."\n");
}
$filevalue = fgets($filero);
if ( $_POST['colortour'] != 0 or $_POST['colortour'] != $filevalue ) {
	$styles['tournament'] = $_POST['colortour'];
	fwrite($file, $styles['tournament']."\n");
}$filevalue = fgets($filero);
if ( $_POST['colortext'] != 0 or $_POST['colortext'] != $filevalue ) {
	$styles['font'] = $_POST['colortext'];
	fwrite($file, $styles['font']);
}
while(fgets($filero) != FALSE) {
	fwrite($file,"");
}
fclose($file);
fclose($filero);

header("Location: http://127.0.0.1:3000/admin.php");
exit();
?>