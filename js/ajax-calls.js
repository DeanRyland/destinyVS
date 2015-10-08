
var apiKey = '1a727ce6000d470db117db15a7331f20';
var preURL = 'http://www.bungie.net/Platform/Destiny/';

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

	var SearchPlayer = preURL + "SearchDestinyPlayer/" + this.platform + "/" + this.gametag;

	console.log(SearchPlayer);

	//var dataArray = {'X-API-KEY':apiKey};

	//console.log( $(this).serialize() );

	$.ajaxSetup({
    	beforeSend: function(xhr) {
        	xhr.setRequestHeader('X-API-KEY', '1a727ce6000d470db117db15a7331f20');
    	}
	});
	
	$.ajax({
	 	method: "GET",
	  	url: SearchPlayer,
	  	crossDomain: true,
	  	dataType: 'json'
	})
	.done(function( data ) {
		console.log(data);
	  	//alert( "Data Saved: " + msg );
	  	//parseData = $.parseJSON(msg);
	  	////console.log(data);
	  	
	  	//TURN BACK ON!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	  	//updateLogin(data);
	});

	/*function setHeader(xhr) {
  		xhr.setRequestHeader('X-API-KEY', apiKey);
	}*/
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
	if(
	$("#playerA-selector").val() === "")
	{
		$('#playerA-selector').css("color", "#D40D12");
		$('#playerA-selector option').css("color", "#555");
		return;
	}
	else if(
	$("#playerA-selector").val() > 0)
	{
		$('#playerA-selector').css("color", "#555");
	}
	if(
	$("#playerB-selector").val() === "")
	{
		$('#playerB-selector').css("color", "#D40D12");
		$('#playerB-selector option').css("color", "#555");
		return;
	}
	else if(
	$("#playerB-selector").val() > 0)
	{
		$('#playerB-selector').css("color", "#555");
	}

	playerA = new Player(playerAgametag, playerAplatform);
	playerB = new Player(playerBgametag, playerBplatform);

	playerA.init();
	//playerB.init();

	vsSubmitAnimation();
}