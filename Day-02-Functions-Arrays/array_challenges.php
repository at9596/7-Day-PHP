<?php

// Challenge 1: Find the largest element in an array
// $arr = [12, 45, 7, 89, 23];
// echo "1. Largest Element: " . max($arr) . PHP_EOL;


// // Challenge 2: Find the smallest element in an array
// echo "2. Smallest Element: " . min($arr) . PHP_EOL;


// // Challenge 3: Calculate sum of all elements
// echo "3. Sum: " . array_sum($arr) . PHP_EOL;


// // Challenge 4: Reverse an array
// echo "4. Reversed Array: ";
// print_r(array_reverse($arr));


// // Challenge 5: Count occurrences of each element
// $arr2 = [1, 2, 2, 3, 3, 3, 4];
// echo "5. Frequency Count: ";
// print_r(array_count_values($arr2));


// // Challenge 6: Remove duplicate values
// echo "6. Unique Elements: ";
// print_r(array_unique($arr2));


// // Challenge 7: Find second largest element
// $arr3 = [10, 50, 20, 80, 60];
// rsort($arr3);
// echo "7. Second Largest: " . $arr3[1] . PHP_EOL;


// // Challenge 8: Merge two arrays
// $a = [1, 2, 3];
// $b = [4, 5, 6];
// echo "8. Merged Array: ";
// print_r(array_merge($a, $b));


// // Challenge 9: Check if a value exists in array
// $value = 5;
// echo "9. Value Exists? ";
// echo in_array($value, $b) ? "Yes" : "No";
// echo PHP_EOL;


// // Challenge 10: Sort array in ascending and descending order
// $arr4 = [9, 3, 7, 1, 5];

// $asc = $arr4;
// sort($asc);

// $desc = $arr4;
// rsort($desc);

// echo "10. Ascending: ";
// print_r($asc);

// echo "Descending: ";
// print_r($desc);

// Find unique elements from array without using inbuilt function:
$arr = [1, 2, 2, 3, 3, 3, 4];

$hash = [];
$n = count($arr);
for($i = 0; $i < $n; $i++){
  $value = $arr[$i];
 if($hash[$value]){
 $hash[$value]+= 1;
 }else{
  $hash[$value] = 1;
 }
}

print_r($hash);

foreach ($hash as $key => $count) {
    if ($count === 1) {
        echo $key . " ";
    }
}

