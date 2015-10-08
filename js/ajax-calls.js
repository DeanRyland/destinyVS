
$(document).ready(function () {

	$('#vs-submit').on("click", GetPlayersInfo);

});

function Player(gametag, platform) {
	this.gametag = gametag;
	this.platform = platform;
}

Player.prototype.init = function () {

	//console.log('Gametag: ' + this.gametag);
	//console.log('doSomthingCool: ' + passedInValue);

	//var SearchPlayer = "SearchDestinyPlayer/" + this.platform + "/" + this.gametag;

	var gametag = this.gametag;
	var platform = this.platform;

	//console.log(SearchPlayer);

	$.ajax({
		method: "POST",
		url: "bungieRequest.php",
		dataType: "json",
		data: {
			'gametag': gametag,
			'platform': platform
		}
	})
	.done(function( data ) {
		populateCharacterTabs(data);
	})
}

var playerA;
var playerB;

function GetPlayersInfo(event) {

	//gather infomation from HTML form inputs
	playerAgametag = $('#playerA').val();
	playerAplatform = $('#playerA-selector').val();

	playerBgametag = $('#playerB').val();
	playerBplatform = $('#playerB-selector').val();

	//validate that the inputs are good
	//check that a name is entered, has proper values
	//check that a platform is selected
	if($("#playerA-selector").val() === "") {
		$('#playerA-selector').css("color", "#D40D12");
		$('#playerA-selector option').css("color", "#555");
		return;
	}
	else if($("#playerA-selector").val() > 0) {
		$('#playerA-selector').css("color", "#555");
	}
	
	if($("#playerB-selector").val() === "") {
		$('#playerB-selector').css("color", "#D40D12");
		$('#playerB-selector option').css("color", "#555");
		return;
	}
	else if($("#playerB-selector").val() > 0) {
		$('#playerB-selector').css("color", "#555");
	}

	playerA = new Player(playerAgametag, playerAplatform);
	playerB = new Player(playerBgametag, playerBplatform);

	playerA.init();
	playerB.init();

	vsSubmitAnimation();
}


function logArrayElements(characterArr, partialHtml) {
	
	console.log('logArrayElements');
	
	//populate the html partial
	var characterHtml = partialHtml;

	characterHtml = characterHtml
		.replace('{{emblem}}', characterArr['charEmblem'])
		.replace('{{class}}', characterArr['charClass'])
		.replace('{{charBg}}', characterArr['charBg'])
		.replace('{{lightLevel}}', characterArr['charLightLevel']);
	$("#charWrapper").append(characterHtml);
		//append it to the chracter wrapper

}


function populateCharacterTabs(data) {

	//Load our character-tab.html partial
	$.ajax({
		url: "partials/character-tab.html",
	})
	.done(
		function( partialHtml ) {
			//for each character
			for(var x in data['characters']){
				//console.log(data['characters'][x]);
				//console.log('testies...');
				logArrayElements(data['characters'][x], partialHtml);
			}
	  		//$(data['characters']).forEach();	
		}
	)
}