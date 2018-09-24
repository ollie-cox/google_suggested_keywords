<?php
$s = "";
$i = 0;
foreach($argv as $x){
	if($i > 0){
		if($i > 1){
			$s .= " ";
		}
		$s .= $x;
	}
	$i++;
}
$s = urlencode($s);
$c = "https://www.google.com.au/complete/search?client=psy-ab&hl=en-AU&gs_rn=64&gs_ri=psy-ab&q=$s&xhr=t";
$json = file_get_contents($c);
$arr = json_decode($json);
# var_dump($arr);
foreach($arr[1] as $a){
	echo $a[0] . PHP_EOL;
}
