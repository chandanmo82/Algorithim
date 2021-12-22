<?php
function binarySearch($arr ,$value){
    $start = 0;
    $end = count($arr) - 1;

    while($start <= $end){
        $midValue = ($start + $end)/2;

        if($value == $arr[$midValue]){
            return $midValue;
        }
        elseif($value < $arr[$midValue]){
            $end = $midValue - 1;
        }
        elseif($value > $arr[$midValue]){
            $start = $midValue + 1;
        }
    }
}
$demoArray = array(4,6,9,98,7654,87,32);
$value = 9 ;
$result = binarySearch($demoArray,$value);
echo "Element is found at index : ".$result."\n";
