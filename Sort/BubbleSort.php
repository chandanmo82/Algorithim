<?php
// PHP program for implementation  of Bubble Sort

function bubbleSort(&$arr)
{
    $len = count($arr);

    // Traverse through all array elements
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}
function printArray($arr, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $arr[$i] . " ";
    echo "\n";
}
$arr = array(55, 45, 98, 56, 32, 12, 65, 92, 22);
$len = count($arr);
echo "Before Sorting :\n";
printArray($arr, $len);
bubbleSort($arr);
echo "Sorted array : \n";
printArray($arr, $len);
?>