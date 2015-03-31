$arr[0][0] = 11;
 $arr[0][1] = 12;
 $arr[0][2] = 13;
 $arr[0][3] = 14;
 $arr[0][4] = 15;
 $arr[0][5] = 16;

 $arr[1][0] = 21;
 $arr[1][1] = 22;
 $arr[1][2] = 23;
 $arr[1][3] = 24;
 $arr[1][4] = 25;
 $arr[1][5] = 26;

 $arr[2][0] = 31;
 $arr[2][1] = 32;
 $arr[2][2] = 33;
 $arr[2][3] = 34;
 $arr[2][4] = 35;
 $arr[2][5] = 36;

 $arr[3][0] = 41;
 $arr[3][1] = 42;
 $arr[3][2] = 43;
 $arr[3][3] = 44;
 $arr[3][4] = 45;
 $arr[3][5] = 46;
 
 $arr[4][0] = 51;
 $arr[4][1] = 52;
 $arr[4][2] = 53;
 $arr[4][3] = 54;
 $arr[4][4] = 55;
 $arr[4][5] = 56;
 
 $arr[5][0] = 61;
 $arr[5][1] = 62;
 $arr[5][2] = 63;
 $arr[5][3] = 64;
 $arr[5][4] = 65;
 $arr[5][5] = 66;
 
 function checkIfEven($number) {
    return($number % 2 == 0);
 }

 $GLOBALS['totalSum'] = 0;
 
 function myfunction($value, $key, $father_key) {
   $sum_of_indexes = $key + $father_key;
   if ( checkIfEven($sum_of_indexes) ){
     $GLOBALS['totalSum'] += $value;
   }
 }
 
 // TODO: try array_walk_recursive and a counter
 foreach($arr as $key => $value) {
    $lastSum = $GLOBALS['totalSum'];
	
    array_walk($value, "myfunction", $key);
	
	$partialSum = $GLOBALS['totalSum'] - $lastSum;
	echo "Partial sum: $partialSum \n";
 }
 
 echo "Global Sum: ";
 echo $GLOBALS['totalSum'];
