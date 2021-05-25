<?php
$str = file_get_contents('http://api.ipma.pt/open-data/forecast/meteorology/cities/daily/hp-daily-forecast-day0.json');

$json = json_decode($str, true); // decode the JSON into an associative array


//LISTAGEM do tempo de algumas cidades a partir da api do IPMA

foreach ($json['data'] as $field => $value) {
    
				
				$strtempo = file_get_contents('http://api.ipma.pt/open-data/weather-type-classe.json');
				$jsontempo = json_decode($strtempo, true); // decode the JSON into an associative array
				
				foreach ($jsontempo['data'] as $field => $valtempo) {
					if($valtempo['idWeatherType'] == $value['idWeatherType'] ){
					$tempo= $valtempo['descIdWeatherTypePT'];
					}
				}
				
	
				if($value['globalIdLocal'] ==1131200 ){
					echo('Porto - Min:'.$value['tMin'].' | Max: '.$value['tMax'].' | Tempo: '.$tempo );
					echo '<br><br>';
				}
	
				if($value['globalIdLocal'] ==1110600 ){
					echo('Lisboa - Min:'.$value['tMin'].' | Max: '.$value['tMax'].' | Tempo: '.$tempo );
					echo '<br><br>';
				}
	
				if($value['globalIdLocal'] ==1171400 ){
					echo('Vila Real - Min:'.$value['tMin'].' | Max: '.$value['tMax'].' | Tempo: '.$tempo );
					echo '<br><br>';
				}
	
				if($value['globalIdLocal'] ==1080500 ){
					echo('Faro - Min:'.$value['tMin'].' | Max: '.$value['tMax'].' | Tempo: '.$tempo );
					echo '<br><br>';
				}
	
				if($value['globalIdLocal'] ==2310300 ){
					echo('Funchal - Min:'.$value['tMin'].' | Max: '.$value['tMax'].' | Tempo: '.$tempo );
					echo '<br><br>';
				}
	
				if($value['globalIdLocal'] ==3420300 ){
					echo('Ponta Delgada - Min:'.$value['tMin'].' | Max: '.$value['tMax'].' | Tempo: '.$tempo );
					echo '<br><br>';
				}
	
	
}



?>