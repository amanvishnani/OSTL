<?php
echo "Hello World</br>";


$a = array();
$b = array(1,2,3);
print_r($b);
echo "</br>";
$c = array('a','b','c');
print_r($c);
echo "</br>";
$d = array(
    'Apple' => 'red',
    'Orange' => 'orange',
    'Banana' => 'yellow'
);
print_r($d);
echo "</br>";
$merged = array_merge($a,$b,$c,$d);
echo "Merged Array";
echo "</br>";
print_r($merged);

echo "</br>Chunk of 2 from Merged Array</br>";

print_r(array_chunk($merged,2));

echo "</br>Flipped Key/Value of Merged Array</br>";
print_r(array_flip($merged));

echo "</br>Array of Keys of Merged Array</br>";
print_r(array_keys($merged));

echo "</br>Number of elements in Merged Array is : ";
print_r(count($merged));

echo "</br>Sorted Merged Array is : ";
sort($merged);
print_r($merged);

echo "</br>array_push(\$merged,7,8,9)=";
array_push($merged,7,8,9);
print_r($merged);

echo "</br>array_unshift(\$merged,'BECSE')=";
array_unshift($merged,'BECSE');
print_r($merged);


echo "</br>array_pop(\$merged)=";
array_pop($merged);
print_r($merged);

echo "</br>array_shift(\$merged)=";
array_shift($merged);
print_r($merged);