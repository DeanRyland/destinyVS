<?php
include_once("curl.php");

$preURL = 'http://www.bungie.net/Platform/Destiny/';
$apiKey = '1a727ce6000d470db117db15a7331f20';

//Information from $_POST sent through Ajax
$player = array($_POST['platform'], ($_POST['gametag']));

// Defining Variables
$platform = $_POST['platform'];
$gamertag = $_POST['gametag'];
// Creating URL for SearchDestinyPlayer curl
$playerSearch = array('searchDestinyPlayer', $platform, $gamertag);

$curlPlayerRequest = curl($playerSearch);
// Finding MembershipID
$memID = $curlPlayerRequest->Response[0]->membershipId;

// Creating URL for Character Summary
$characterIDRequest = array($platform, 'Account', $memID, 'Summary');

$curlCharacterIDRequest = curl($characterIDRequest);

// Grabbing the Character IDs
foreach($curlCharacterIDRequest->Response->data->characters as $character){

	$characterArr = array();

	$characterArr['charID'] = $character->characterBase->characterId;

	$characterArr['charLightLevel'] = $character->characterBase->powerLevel;

	$characterArr['charEmblem'] = $character->emblemPath;

	$characterArr['charBg'] = $character->backgroundPath;

	$charactersArray['characters'][] = $characterArr;
}

//$curlCharacterIDRequest = curl($characterIDRequest);

//var_dump($characterArray);

print json_encode($charactersArray);