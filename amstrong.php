<?php 
// SOLUTION 01: CHECK WETHER NUMBER IS AMSTRONG OR NOT
$number = 371;
$digits = array();
$itsPower  = 0;

$digits = str_split($number) ; //This return string array

$mydigits = array_map('intval', $digits); //This convert string array to int array

$noOfDigits = sizeof($mydigits);

for($i=0 ; $i < $noOfDigits; $i++){
	$itsPower += pow($mydigits[$i], 3);
}

if($number == $itsPower)
	var_dump('AMSTRONG NUMBER');
else
	var_dump("NOT AMSTRONG NUMBER");

?>

<hr>


<?php 
// SOLUTION 02: CHECK WETHER NUMBER IS AMSTRONG OR NOT
$number = 371;
$digits = array();
$sum  = 0;

$digits = array_map('intval', str_split($number));


for($i=0 ; $i < count($digits); $i++){

	$sum = $sum + $digits[$i] * $digits[$i] * $digits[$i];

}

if($number == $sum)
	var_dump('AMSTRONG NUMBER');
else
	var_dump("NOT AMSTRONG NUMBER");

?>

<hr>



<?php 
//SOLUTION 01: LIST AMSTRONG NUMBER BTN 0 AND N 
$limit = 999;
$digits = array();
$itsPower  = 0;

for($i=0 ; $i <= $limit; $i++){

	$digits = array_map('intval', str_split($i));

	$count = sizeof($digits);

	$amstrongExponent = 3; //This is fixed

	for($j=0 ; $j < $count; $j++){

		$itsPower += pow($digits[$j], $amstrongExponent);

	}

	if($i == $itsPower)
		echo $i.'<br>';

	$itsPower  = 0;

}

?>

<hr>



<?php 
//SOLUTION 02: LIST AMSTRONG NUMBER BTN 0 AND N 
$limit = 999;
$digits = array();
$sum  = 0;

for($i=0 ; $i <= $limit; $i++){

	$digits = array_map('intval', str_split($i));

	$count = sizeof($digits);

	for($j=0 ; $j < $count; $j++){

		$sum = $sum + $digits[$j]*$digits[$j]*$digits[$j];

	}

	if($i == $sum)
		echo $i.'<br>';

	$sum  = 0;

}

?>