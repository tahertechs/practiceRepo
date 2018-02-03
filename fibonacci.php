

<?PHP 
//SOLUTION 01
   $first = 0;
   $second = 1;
   echo $first.'&nbsp;,';
   echo $second.'&nbsp;,';
  

  for($limit=0;$limit<10;$limit++)
   {
     $third = $first+$second;
     echo $third.'&nbsp;,';;
     $first = $second;
     $second = $third;
   
   }

?>

<hr>

<?php 
//SOLUTION 02
$first = 0;
$second = 1;
$number = 10;

function nextNumber($n, $first, $second){

	$next = array();

	for($i = 0; $i < $n ; $i++){

		//array_push($next, $first);
		//$next[] = $first;
		//
		if($i == $n - 1) //If the last element
			echo $first; //Remove the comma
		else
			echo $first."  ,";
		$sum = $first + $second;
		$first = $second;
		$second = $sum;

	}
	//return $next;
} 

echo nextNumber($number,$first,$second);
// foreach (nextNumber($number, $first,$second) as $key) {
// 	echo $key.'  ,';
// }
?>
