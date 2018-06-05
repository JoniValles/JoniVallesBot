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
$client = new Zelenin\Telegram\Bot\Api('544381336:AAGq_Z9pdknzO_q9n6ZVlID-2SWMB4HS9I4'); // Set your access token
$url = ''; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));
 
//your app
try {
	http_response_code(200);
    if($update->message->text == '/joni')
    {http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "Ese Joni como mola se merece una oola"
     	]);
    }
    else if($update->message->text == '/rickroll')
    {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
    		]);
    }else if($update->message->text == '/belen') {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Casuaaaaal"
    		]);
    }else if($update->message->text == '/tomberi') {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "https://media.giphy.com/media/l49K0DUalMrMwE9qg/giphy.gif"
    		]);
    }else if($update->message->text == '/pablo') {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Vamos Pablo sal a bailar que tu lo haces fenomenal tu cuerpo se mueve como una palmera suave, suave, su, su, suave"
    		]);
    }else if($update->message->text == '/picky') {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Picky dimision!!!!!"
    		]);
    }else if($update->message->text == '/xavi') {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Estas tardando en confirmar nidos"
    		]);
    }else if($update->message->text == '/yfoms') {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Viva er Beti manque pierda!"
    		]);
    }else if($update->message->text == '/paola') {
			http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Casual"
    		]);
    }else if($update->message->text == '/location') {
			
    	$response = $client->sendLocation([
        		'chat_id' => $update->message->chat->id,
			'latitude' => 43.03434,
			'longitude' => -5.03234
     			]);
    }else if($update->message->text == '/recompensas') {
			http_response_code(200);
    	$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => 'https://i.imgur.com/Jo1U31G.jpg'
     			]);
    }
	/*else if($update->message->text == '/teclado') {
			
			$keyboard = array('keyboard' => array(array("A", "B")));
	
	$encodedMarkup = json_encode($keyboard);
    	$response = $client->sendMessage([
        		'chat_id' => $update->message->chat->id,
				'reply_markup' => $encodedMarkup,
			'text' => 'Test'
     			]);
    }*/else if($update->message->text == '/prueba') {
			http_response_code(200);
    	$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => 'https://i.imgur.com/Jo1U31G.jpg'
     			]);
    }else if($update->message->text == '/tecla') {
			
			$keyboard = [
                       'keyboard' => [
                         ['Yes'],['No'],['Maybe'],
                         ['1'],['2'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],['3'],
                       ] ,
                       'resize_keyboard' => true,
                       'one_time_keyboard' => true,
                  'selective' => true
                   ];
				   
				   	$encodedMarkup = json_encode($keyboard);
    	$response = $client->sendMessage([
        		'chat_id' => $update->message->chat->id,
				'reply_markup' => $encodedMarkup,
			'text' => 'Test'
     			]);
    }
	
	
	 /*
	
	
	else if($update->message->text == '/gym')
    {
 $query = "select slots_available, name,url,cp,trainer_name,latitude,longitude,pokemon_id,team_id,iv_attack,iv_defense,iv_stamina,total_cp from gym inner join gymmember on gym.gym_id = gymmember.gym_id inner join gymdetails on gym.gym_id = gymdetails.gym_id inner join gympokemon on gymmember.pokemon_uid=gympokemon.pokemon_uid where trainer_name = 'CristinaBugallo' and gym.last_scanned > now() - interval 24 hour order by slots_available desc;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
		
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $row['trainer_name']
    		]);
    }
	
	
	else if(substr($update->message->text, 0, 11 ) === "/gymoviedo ")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', '83.97.217.51');
 define('DB_USER', 'PMG');
 define('DB_PASS', "PMGG");
 define('DB_NAME', 'PMGOviedo2701');
 
 //connecting to database and getting the connection object
 $conn = new mysqli('83.97.217.51', DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select slots_available, name,url,cp,trainer_name,latitude,longitude,pokemon_id,team_id,iv_attack,iv_defense,iv_stamina,total_cp from gym inner join gymmember on gym.gym_id = gymmember.gym_id inner join gymdetails on gym.gym_id = gymdetails.gym_id inner join gympokemon on gymmember.pokemon_uid=gympokemon.pokemon_uid where trainer_name = '$trainer[1]' and gym.last_scanned > now() - interval 24 hour order by slots_available desc;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
 while ($row = mysqli_fetch_array($result)) {
		
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $row['trainer_name'] . " - Gimnasio: " . $row['name'] . " - Huecos disponibles: ". $row['slots_available']
    		]);
    }
	}
	
	
	else if($update->message->text == '/azul')
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', '83.97.217.51');
 define('DB_USER', 'PMG');
 define('DB_PASS', "PMGG");
 define('DB_NAME', 'pmggijon2701');
 
 //connecting to database and getting the connection object
 $conn = new mysqli('83.97.217.51', DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Error"
    		]);
 die();
 }
 
 
 $query = "select slots_available, name,url,cp,trainer_name,latitude,longitude,pokemon_id,team_id,iv_attack,iv_defense,iv_stamina,total_cp from gym inner join gymmember on gym.gym_id = gymmember.gym_id inner join gymdetails on gym.gym_id = gymdetails.gym_id inner join gympokemon on gymmember.pokemon_uid=gympokemon.pokemon_uid where gym.last_scanned > now() - interval 24 hour and team_id = 1 and slots_available > 0  group by name order by slots_available desc;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
 while ($row = mysqli_fetch_array($result)) {
		
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Gimnasio: " . $row['name'] . " - Huecos disponibles: ". $row['slots_available']
    		]);
    }
	}
	
	
	
	else if(substr($update->message->text, 0, 10 ) === "/gymgijon ")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', '83.97.217.51');
 define('DB_USER', 'PMG');
 define('DB_PASS', "PMGG");
 define('DB_NAME', 'PMGGijon2701');
 
 //connecting to database and getting the connection object
 $conn = new mysqli('83.97.217.51', DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select slots_available, name,url,cp,trainer_name,latitude,longitude,pokemon_id,team_id,iv_attack,iv_defense,iv_stamina,total_cp from gym inner join gymmember on gym.gym_id = gymmember.gym_id inner join gymdetails on gym.gym_id = gymdetails.gym_id inner join gympokemon on gymmember.pokemon_uid=gympokemon.pokemon_uid where trainer_name = '$trainer[1]' and gym.last_scanned > now() - interval 24 hour order by slots_available desc;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
 while ($row = mysqli_fetch_array($result)) {
		
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $row['trainer_name'] . " - Gimnasio: " . $row['name'] . " - Huecos disponibles: ". $row['slots_available']
    		]);
    }
	}
	
	
	
	

	
	else if(substr($update->message->text, 0, 4 ) === "/ex ")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', '83.97.217.51');
 define('DB_USER', 'PMG');
 define('DB_PASS', "PMGG");
 define('DB_NAME', 'PMGOviedo2701');
 
 //connecting to database and getting the connection object
 $conn = new mysqli('83.97.217.51', DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 
 //$trainer = explode(" ", $update->message->text);
 $query = "select name,level,spawn,start,end from raid inner join gymdetails on raid.gym_id = gymdetails.gym_id inner join gym on raid.gym_id = gym.gym_id where raid.end > now() - interval 1 hour order by end asc;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
 while ($row = mysqli_fetch_array($result)) {
		
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => " Gimnasio: " . $row['name'] . " - Huecos disponibles: ". $row['level']
    		]);
    }
	} */
	
	
	
	
	
	##############################################################################################
	#########################POKEMON##############################################################
	##############################################################################################
	
	/*
	
	 else if(substr($update->message->text, 0, 8 ) === "/pidgey ")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', '83.97.217.51');
 define('DB_USER', 'PMG');
 define('DB_PASS', "PMGG");
 define('DB_NAME', 'PMGOviedo2701');
 
 //connecting to database and getting the connection object
 $conn = new mysqli('83.97.217.51', DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select latitude,longitude,disappear_time from pokemon where pokemon_id = 16 limit 1;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => Pidgey
    		]);
    
	} 
	
	
	
	
	
	else if(substr($update->message->text, 0, 9 ) === "/pokestop")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', '85.152.108.67');
 define('DB_USER', 'PMG');
 define('DB_PASS', "PMGG");
 define('DB_NAME', 'Pokestopquest');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from pokestopq;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => Pidgey
    		]);
    
	} */
	
	
	
	//Misiones
	
	/* MENSAJE MULTILINEA
	
	else if(substr($update->message->text, 0, 9 ) === "/misiones")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from mision;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
while ($row = mysqli_fetch_array($result)) {
		
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "ID: " .$row['id']." - Recompensa: " . $row['Recompensa'] . " - Pokeparada: ". $row['Pokeparada']
    		]);
    }
	} */
	
	
	
	
	else if(substr($update->message->text, 0, 9 ) === "/misiones")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from mision;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido misiones";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
		if (empty($row['Latitude'])) {
			$data = $data . "<b>ID:</b> " .$row['id']." - <b>Recompensa:</b> " . $row['Recompensa'] . " -<b> Pokeparada:</b> ". $row['Pokeparada']."\n";
		}else{
		$data = $data . "<b>ID:</b> " .$row['id']." - <b>Recompensa:</b> " . $row['Recompensa'] . " -<b> Pokeparada:</b> ". $row['Pokeparada'] ." - "."https://www.google.com/maps/?q=".$row['Latitude'].",".$row['Longitude'] ."\n";
    	}
    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	
	
	/*else if(substr($update->message->text, 0, 4 ) === "/map")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from mision;";
 $query2 = "select * from pokestop;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $result2 = mysqli_query($conn, $query2);
 //$row = mysqli_fetch_array($result);
 //$row2 = mysqli_fetch_array($result2);
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido misiones";

 }else{
	 
	 
	 while ($row = mysqli_fetch_array($result)) {
     $pokeparada[] = $row;
}
while ($row2 = mysqli_fetch_array($result2)) {
     $pokestop[] = $row;
}
 
foreach ($pokeparada as $key => $row) {
	foreach ($pokestop as $key => $row2) {
		similar_text($row['Pokeparada'], $row2['Name'], $percent);
		$data = $data .$row['Pokeparada'] . " - " . $row['Name'] . " Porcentaje: ". $percent ."\n";
		
		 if($percent > 75){
			//$query3 = "insert into mision (Latitude, Longitude) values ('$row2[Longitude]','$row[Latitude]');";
			//$query3 = "insert into mision (Recompensa, Pokeparada, Latitude, Longitude,Pokeparadareal) values ('$row['Recompensa']','$row['Pokeparada']','$row2[Longitude]','$row2[Latitude]','$row2[Name]') where Pokeparada = '$row['Pokeparada']';";
			//$latitude = $row2[Latitude];
			//$longitude = $row2[Longitude];
			//$name = $row2[Name];
			//$pokeparada = $row[Pokeparada];
			$data = $data . $row['Pokeparada'];
			$query3 = "update mision set Latitude='$row2[Latitude]',Longitude='$row2[Longitude]',PokeparadaReal='$row2[Name]' where Pokeparada = '$row2[Pokeparada]';";
			//$query3 = "update mision set Latitude='$latitude',Longitude='$longitude',PokeparadaReal='$name' where Pokeparada = '$pokeparada'';";

			$result4 = mysqli_query($conn, $query3);

			
    }else{
	//$data = $percent;
	}
 }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	

	}*/
	
	
	
	
	
	
	
	
	
	
	
	
	//UBICACION
	
	
	
	else if(!is_null($update->message->reply_to_message->message_id))
    {
		http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 $latitude = $update->message->location->latitude;
 $longitude = $update->message->location->latitude;
 $username = $update->message->username;
 $a = $update->message->chat->type;
 //$x = $update->message->reply_to_message->text;
 $id = explode(" ", $update->message->reply_to_message->text);

 $query = "insert into mision (Latitud, Longitud) values ('$latitude','$longitude') where id = $id[1]";
 //executing the query 
 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $latitude . "," . $longitude . " ID: " . $id[1]
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	else if(substr($update->message->text, 0, 11 ) === "/aerodactyl")
    {
		
		http_response_code(200);
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from mision;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
	
	while ($row = mysqli_fetch_array($result)) {
		
		$data = $data . "ID: " .$row['id']." - Aerodactyl: " . $row['Recompensa'] . " - Pokeparada: ". $row['Pokeparada'] . "\n";
    	
    }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	//AÑADIR
	/*
	else if(substr($update->message->text, 0, 10) === "/confirmar")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "insert into mision (Recompensa, Pokeparada) values ('$trainer[1]','$trainer[2]')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision confirmada!"
    		]);
	}*/
	
	
	//AÑADIR MISION
	
	else if(substr($update->message->text, 0, 10) === "/confirmar")
    {http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into mision (Recompensa, Pokeparada) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision confirmada!"
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	//BORRAR
	
	else if(substr($update->message->text, 0, 15) === "/borrartodotodo")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 }
 $query = "DELETE FROM mision;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Borradas todas las misiones!"
    		]);
	}
	
		else if(substr($update->message->text, 0, 10) === "/delmision")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $id = explode(" ", $update->message->text);
 $query = "delete from mision where id = $id[1] ";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision borrada!"
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	##############################################################################################
	#########################################OVIEDO###############################################
	##############################################################################################
	
	
	
	
	else if(substr($update->message->text, 0, 10 ) === "//misiones")
    {http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from misionoviedo;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
 if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido misiones";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
		
		$data = $data . "<b>ID:</b> " .$row['id']." - <b>Recompensa:</b> " . $row['Recompensa'] . " -<b> Pokeparada:</b> ". $row['Pokeparada']."\n";
    	
    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	else if(substr($update->message->text, 0, 12 ) === "//aerodactyl")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from misionoviedo where recompensa = 'Aerodactyl';";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
	
	while ($row = mysqli_fetch_array($result)) {
		
		$data = $data . "ID: " .$row['id']." - Aerodactyl: " . $row['Recompensa'] . " - Pokeparada: ". $row['Pokeparada'] . "\n";
    	
    }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	//AÑADIR
	/*
	else if(substr($update->message->text, 0, 10) === "/confirmar")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "insert into mision (Recompensa, Pokeparada) values ('$trainer[1]','$trainer[2]')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision confirmada!"
    		]);
	}*/
	
	
	//AÑADIR MISION
	
	else if(substr($update->message->text, 0, 11) === "//confirmar")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into misionoviedo (Recompensa, Pokeparada) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision confirmada!"
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	//BORRAR
	
	else if(substr($update->message->text, 0, 16) === "//borrartodotodo")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 $query = "DELETE FROM misionoviedo;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Borradas todas las misiones!"
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
		else if(substr($update->message->text, 0, 11) === "//delmision")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $id = explode(" ", $update->message->text);
 $query = "delete from misionoviedo where id = $id[1] ";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision borrada!"
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    /* else if($update->message->text == '/latest')
    {
    		Feed::$cacheDir 	= __DIR__ . '/cache';
			Feed::$cacheExpire 	= '5 hours';
			$rss 		= Feed::loadRss($url);
			$items 		= $rss->item;
			$lastitem 	= $items[0];
			$lastlink 	= $lastitem->link;
			$lasttitle 	= $lastitem->title;
			$message = $lasttitle . " \n ". $lastlink;
			//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

			$response = $client->sendMessage([
					'chat_id' => $update->message->chat->id,
					'text' => $message
				]);
    } */
   else{
	   http_response_code(200);
	   }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
	http_response_code(200);
    //echo error message ot log it
    echo $e->getMessage();
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $e
    		]);
}