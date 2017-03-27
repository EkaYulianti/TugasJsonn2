<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/history_20060405/q/IA/mugassari.json");
	$parsed_json = json_decode ($json_string);
	
	$json_string2 = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/conditions/q/IA/mugassari.json");
	$parsed_json2 = json_decode ($json_string2);
	
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/a657d7d2ba430b38/planner_08010831/q/IA/mugassari.json");
	$parsed_json3 = json_decode ($json_string3);
	
	
	$history = $parsed_json->{'history'}->{'date'}->{"pretty"};
	$his = $parsed_json->{'history'}->{'date'}->{"tzname"};
	$tory = $parsed_json->{'history'}->{'utcdate'}->{"hour"};
	
	$conditions = $parsed_json2->{'current_observation'}->{'display_location'}->{"state_name"};
	$condi = $parsed_json2->{'current_observation'}->{'display_location'}->{"city"};
	$condit = $parsed_json2->{'current_observation'}->{'display_location'}->{"latitude"};

	
	$planner = $parsed_json3->{'trip'}->{"title"};
	$plan = $parsed_json3->{'trip'}->{"airport_code"};
	$plann = $parsed_json3->{'trip'}->{"cloud_cover"}->{'cond'};
	
	echo "Pretty : ${history}\n";
    echo "<br>";
	echo "Tzname : ${his}\n";
    echo "<br>";	
	echo "Pressurem : ${tory}\n";
	echo "<br>";
	echo "State Name : ${conditions}\n";
	echo "<br>";
	echo "City : ${condi}\n";
	echo "<br>";
	echo "Latitude : ${condit}\n";
	echo "<br>";
	echo "Title : ${planner}\n";
	echo "<br>";
	echo "Airport_code : ${plan}\n";
	echo "<br>";
	echo "Cond : ${plann}\n";
	echo "<br>";
	
?>