<?php

$myArray = array();

for ($i = 0; $i < 10000; $i++){
	$myArray[] = rand(0,1000);
}

$counter = 0;
$min = $myArray[0];
$i = 0;
$place = 0;
$max = $myArray[0];
$maxplace = 0;
$start = microtime(true);
while($counter < count($myArray)) {
	$i = $counter;
	$min = $myArray[$counter];
	$max = $myArray[$counter];
	while($i < count($myArray)) {
		if($myArray[$i] < $min) {
			$min = $myArray[$i];
			$place = $i;
		}
		else if ($myArray[$i] > $max) {
			$max = $myArray[$i];
			$maxplace = $i;
		}
		$i++;
	}
	$myArray[$place] = $myArray[$counter];
	$myArray[$counter] = $min;
	$myArray[$maxplace] = $myArray[count($myArray) - 1];
	$myArray[count($myArray) - 1] = $max;
	
	
	$counter++;

}
$end = microtime(true);
for ($i = 0; $i < count($myArray); $i++) {
	echo $myArray[$i] . "<br>";
}

$final = $end - $start;
echo "Time spent: " . $final;

?>