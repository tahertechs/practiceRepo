<?php 

//define('PRECISION', .0001); 

// function raiseToPower($base,$exponent)
// {
//     $result=1;
//     for($i=1;$i<=$exponent;$i++)
//     {
//       $result = $result * $base;  
//     }
//     return $result;
// }



/**
 * FUNCTIONS
 */
function reciprocal($x){
	return (1 / $x);
}

function power($x, $n){
	if($n > 0)
		return $x * power($x, $n-1);
	if ($n == 0) 
		return 1;
	if($n < 0)
		return $x * power($x, $n+1);
}


$base = 2; $exponent=-3;

if($exponent < 0)
	echo reciprocal(power($base, $exponent));
else
	echo power($base, $exponent);



 ?>
