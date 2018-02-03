<?php 
	
	$number = 5;   $factorial = 1;

	//Solution 01
 	function factorial2(int $number)
    {
       if($number==0 || $number==1)
         return 1;

       $result = factorial2($number-1) * $number;
       return $result;
    }
    echo factorial2($number); echo '<hr>';
    

    //Solution 02
	function factorial($number){
		if($number > 1)
			return $number * factorial($number - 1);
		else
			return 1;
	}
	echo factorial($number); echo '<hr>';

	//Solution 03
	for($i = 1; $i <= $number; $i++){
		$factorial = $factorial * $i;
	}
	echo $factorial;

 ?>