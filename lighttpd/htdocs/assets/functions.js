
// tourName=SEB&tourSet=R1&
// p1tag=TAG1&p1name=SupraSky&p1flag=France&
// p2tag=TAG2&p1name=Laiflayn&p2flag=Belgique
// p1score=0&p2score=0

let player1 = {country:"None",tag:"T1",name:"Mkleo"};
let player2 = {country:"None",tag:"SLY",name:"Glutonny"};
let tournament = {name:"Pound 2022",set:"Grand Finals"};
let scores = {p1score:"0",p2score:"0"};
var playertemp;
var scoretemp;

const queryString = window.location.search;
if (queryString.charAt(0)) {
	console.log(queryString);
	
}
else {
	console.log("Formulaire non rempli");
}
function updateData() {
	if ( URLSearchParams.get('p1flag') != 0) {
		player1.country = URLSearchParams.get('p1flag')
	}
	if ( URLSearchParams.get('p2flag') != 0) {
		player2.country = URLSearchParams.get('p2flag')
	}
	if ( URLSearchParams.get('p1tag') != 0) {
		player1.tag = URLSearchParams.get('p1tag')
	}
	if ( URLSearchParams.get('p2tag') != 0) {
		player2.tag = URLSearchParams.get('p2tag')
	}	
	if ( URLSearchParams.get('p1name') != 0) {
		player1.name = URLSearchParams.get('p1name')
	}		
	if ( URLSearchParams.get('p2name') != 0) {
		player2.name = URLSearchParams.get('p2name')
	}		
	if ( URLSearchParams.get('tourName') != 0) {
		tournament.name = URLSearchParams.get('tourName')
	}	
	if ( URLSearchParams.get('tourSet') != 0) {
		tournament.set = URLSearchParams.get('tourSet')
	}		
	if ( URLSearchParams.get('p1score') != 0) {
		scores.p1score = URLSearchParams.get('p1score')
	}		
	if ( URLSearchParams.get('p2score') != 0) {
		scores.p2score = URLSearchParams.get('p2score')
	}
	
	// player1 = {country:URLSearchParams.get('p1flag'),tag:URLSearchParams.get('p1tag'),name:URLSearchParams.get('p1name')};
	// player2 = {country:URLSearchParams.get('p2flag'),tag:URLSearchParams.get('p2tag'),name:URLSearchParams.get('p2name')};
	// tournament = {name:URLSearchParams.get('tourName'),set:URLSearchParams.get('tourSet')};
	// scores = {p1score:URLSearchParams.get('p1score'),p2score:URLSearchParams.get('p2score')};
	
	if ( URLSearchParams.get('swap') = "Yes" ) {
		playertemp = player1;
		player2 = player1;
		player1 = playertemp;
		scoretemp =  scores.p1score;
		scores.p1score = scores.p2score;
		scores.p2score = scoretemp ;
	}
	
}