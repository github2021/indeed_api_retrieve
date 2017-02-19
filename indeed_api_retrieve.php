<!DOCTYPE html>
<html>
<head>
	<title>Indeed API retrieve</title>
</head>
<body>


<?php
		 
$apicall = 	 "http://api.indeed.com/ads/apisearch?"
			."publisher=19474516670588"
			."&q=fashion"
			."&l=ireland"
			."&sort="
			."&radius="
			."&st="
			."&jt="
			."&start="
			."&limit=10"
			."&fromage="
			."&filter="
			."&latlong=1"
			."&co=ie"
			."&chnl="
			."&userip=1.2.3.4"
			."&useragent=Mozilla/%2F4.0%28Firefox%29&v=2";
					 
		 	 
    $debug = 1; if ($debug) {print "GET call = $apicall <br><br>";}
	$resp = simplexml_load_file($apicall);
	
	echo $resp->query."<br>";
	echo $resp->location."<br><br>";
	foreach ($resp->results->result as $count_this) {$counter[] = $count_this;} $array_count = count($counter); echo "<br>"; $num_range = range(0, $array_count-1);echo "<br>";
	
	foreach ($num_range as $num) { 
									echo "Job Title: ".$resp->results->result[$num]->jobtitle."<br>"
								         ."Company: " .$resp->results->result[$num]->company ."<br>"
								         ." " .$resp->results->result[$num]->snippet ."<br>"
								         ." " .$resp->results->result[$num]->url ."<br>"
								         ." " .$resp->results->result[$num]->date ."<br>"
	."<br>";	}

	
	?>



</body>
</html>
