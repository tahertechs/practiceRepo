<?php 

//SOLUTION 01
function splitNumber($number){

	$splitted = array();

	$digits = array_map('intval', str_split($number));

	$splitted = $digits;

	return $splitted;
}

var_dump(splitNumber(4562));

echo '<hr>';

//SOLUTION 03
function splitNumber2($number){

	$splitted = array();

	$length = strlen($number);

	$count = $length;

	for($i = 0 ; $i < $count ; $i++){

		$temp = $number / pow(10, $length - 1);

		$remainder = $number % pow(10, $length - 1);

		$splitted[] = (int)$temp;

		$number = $remainder;

		$length--;

	} 

	return $splitted;
}

var_dump(splitNumber2(4562));

echo '<hr>';



//SOLUTION 0: Calculate Number ofdigits
function numberOfDigits($number){

	 $count = 0;

	 // while ((int)$number){
	 // 	$number = $number / 10;

	 // 	$count++;
	 // }

	do {
	     ++$count; 
	     $number /= 10;
	} while ((int)$number);

	return $count;
}

echo numberOfDigits(0);


//In C++ std::to_string(num).length()
 ?>




