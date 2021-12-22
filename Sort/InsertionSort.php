<?php
// PHP program for insertion sort

function insertionSort(&$arr, $n)
{
	for ($i = 1; $i < $n; $i++)
	{
		$temp = $arr[$i];
		$j = $i-1;
		while ($j >= 0 && $arr[$j] > $temp)
		{
			$arr[$j + 1] = $arr[$j];
			$j = $j - 1;
		}
		
		$arr[$j + 1] = $temp;
	}
}

/**
 * A function to 
 * print the array
 */
function printArray(&$arr, $n)
{
	for ($i = 0; $i < $n; $i++)
		echo $arr[$i]." ";
	echo "\n";
}

// Driver Code
$arr = array(98,45,67,11,87,43,54);
$length = sizeof($arr);
echo "Before Sorting  ;\n";
printArray($arr,$length);
insertionSort($arr, $length);
echo "After Sorting :\n";
printArray($arr, $n);

?>
