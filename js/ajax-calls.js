
var apiKey = '1a727ce6000d470db117db15a7331f20';
var preURL = 'http://www.bungie.net/Platform/Destiny/';

$(document).ready(function () {

	$('#vs-submit').on("click", GetAccountInfo);

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

	var dataArray = array('X-API-KEY'=>apiKey);

	//console.log( $(this).serialize() );
	
	$.ajax({
	 	method: "POST",
	  	url: SearchPlayer,
	  	data: dataArray,
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

}




function GetAccountInfo(event) {

	playerAgametag = $('#playerA').val();
	playerAplatform = $('#playerA-selector').val();

	playerBgametag = $('#playerB').val();
	playerBplatform = $('#playerB-selector').val();

	var playerA = new Player(playerAgametag, playerAplatform);
	var playerB = new Player(playerBgametag, playerBplatform);

	playerA.init();
	playerB.init();
}