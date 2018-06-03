<?php

/*
* This file is part of GeeksWeb Bot (GWB).
*
* GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License version 3
* as published by the Free Software Foundation.
* 
* GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.  <http://www.gnu.org/licenses/>
*
* Author(s):
*
* © 2015 Kasra Madadipouya <kasra@madadipouya.com>
*
*/
require 'vendor/autoload.php';

$client = new Zelenin\Telegram\Bot\Api('544381336:AAGA-5dftz6frX-P2j2r21vdgS7tU_YDOvE'); // Set your access token
$url = ''; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));

 
 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', '83.97.217.51');
 define('DB_USER', 'jonivalles');
 define('DB_PASS', "jvr123");
 define('DB_NAME', 'PMGOviedo0401');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }

//your app
try {
	
	return 1;

    if($update->message->text == '/joni')
    {
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "Ese Joni como mola se merece una ooooola"
     	]);
    }
    else if($update->message->text == '/rickroll')
    {
			
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
    		]);

    }
	else if($update->message->text == '/gym')
    {
 $query = "select slots_available, name,url,cp,trainer_name,latitude,longitude,pokemon_id,team_id,iv_attack,iv_defense,iv_stamina,total_cp from gym inner join gymmember on gym.gym_id = gymmember.gym_id inner join gymdetails on gym.gym_id = gymdetails.gym_id inner join gympokemon on gymmember.pokemon_uid=gympokemon.pokemon_uid where trainer_name = 'CristinaBugallo' and gym.last_scanned > now() - interval 24 hour order by slots_available desc;";

 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
		
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $row['trainer_name']
    		]);

    }
	
	
	else if(substr($update->message->text, 0, 5 ) === "/gym ")
    {
 $trainer = explode(" ", $update->message->text);
 $query = "select slots_available, name,url,cp,trainer_name,latitude,longitude,pokemon_id,team_id,iv_attack,iv_defense,iv_stamina,total_cp from gym inner join gymmember on gym.gym_id = gymmember.gym_id inner join gymdetails on gym.gym_id = gymdetails.gym_id inner join gympokemon on gymmember.pokemon_uid=gympokemon.pokemon_uid where trainer_name = '$trainer[1]' and gym.last_scanned > now() - interval 24 hour order by slots_available desc;";

 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
 while ($row = mysqli_fetch_array($result)) {
		
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $row['trainer_name'] . " - Gimnasio: " . $row['name'] . " - Huecos disponibles: ". $row['slots_available']
    		]);

    }
	
	
	
	/*
	else if(substr($update->message->text, 0, 10 ) === "/gymcount ")
    {
 $trainer = explode(" ", $update->message->text);
 $query = "select count(name) from gym inner join gymmember on gym.gym_id = gymmember.gym_id inner join gymdetails on gym.gym_id = gymdetails.gym_id inner join gympokemon on gymmember.pokemon_uid=gympokemon.pokemon_uid where trainer_name = '$trainer[1]' and gym.last_scanned > now() - interval 24 hour order by slots_available desc;";

 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
 while ($row = mysqli_fetch_array($result)) {
		
    	$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $row['trainer_name'] . " - Gimnasio: " . $row['name'] . " - Huecos disponibles: ". $row['slots_available']
    		]);

    }
	
	}
	*/
	
	
	
	
	
	
	
	
	
	
	
	
    else if($update->message->text == '/latest')
    {
    		Feed::$cacheDir 	= __DIR__ . '/cache';
			Feed::$cacheExpire 	= '5 hours';
			$rss 		= Feed::loadRss($url);
			$items 		= $rss->item;
			$lastitem 	= $items[0];
			$lastlink 	= $lastitem->link;
			$lasttitle 	= $lastitem->title;
			$message = $lasttitle . " \n ". $lastlink;
			$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => $message
				]);

    }
   else{
	   }

} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
