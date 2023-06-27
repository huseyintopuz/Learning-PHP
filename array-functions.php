<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$numbers = [1, 2, 3, 4, 5, 6];
$word = 'hello world';
echo count($numbers) . "<br>";

$newList = implode("-", $numbers);
echo($newList);
echo "<br>";

$newNumbers = explode("-", $newList);
var_dump($newNumbers);
echo "<br>";

for ($i = 0; $i <= count($numbers) - 1; $i++) {
    echo $numbers[$i];
}
echo "<br>";

echo is_array($numbers); // it shows 1 as true;
echo is_array($word); // it doesn't show on screen because of not includes an array;

echo "<pre>";
$numbersRange = range(1, 20);
shuffle($numbersRange); // it mixes the array;
print_r($numbersRange);
$keys = array_rand($numbersRange, 2); // it returns two values of array randomly;
print_r($keys);

$array = range(1, 10);
$array2 = range(11, 25);

$plus = array_map(function ($e) {
    return $e + 12;
}, $array);
print_r($plus);

$mergedArray = array_merge($array, $array2);
print_r($mergedArray);
function cube($number)
{
    return $number * $number * $number;
}

$total = array_map('cube', $array);
print_r($total);

$evenNumbers = array_filter($array, function ($e) {
    return $e % 2 == 0;
});

print_r($evenNumbers);

$oddNumbers = array_filter($array, function ($e) {
    return $e % 2 == 1;
});

print_r($oddNumbers);

$fruits = ['apple', 'orange', 'banana'];
$letters = ['a', 'b', 'c'];
$array = array_combine($fruits, $letters);
print_r($array);

$animals = ['bear', 'duck', 'donkey', 'monkey', 'bear', 'bear', 'duck'];
print_r(array_count_values($animals)); // it shows each item count in an array.
$exist = array_key_exists(5, $animals); // true;
$exist = array_key_exists(7, $animals); // false;
var_dump($exist);

$reversedAnimals = array_reverse($animals);
print_r($reversedAnimals);

$searchedArray = array_search('monkey', $animals); // it returns index number of monkey;
print_r($searchedArray);
echo "<br>";

if (in_array('duck', $animals)) echo "it is available";
else {
    echo "not available";
}
echo "<br>";

$stuff = ['Hüseyin', 'Tolga', 'Umut', 'Veysel', 'Esat'];
array_shift($stuff); // removes first element;
array_pop($stuff); // removes last element;
print_r($stuff);
echo "<br>";
$fullStuff = ['Hüseyin', 'Tolga', 'Umut', 'Veysel', 'Esat'];
$newFullStuff = array_slice($fullStuff, 1, 2);

print_r($newFullStuff);
echo "<br>";

$nnumber = range(1, 6);
print_r(array_sum($nnumber)); // it sums all values;
echo "<br>";

print_r(array_product($nnumber)); // it multiplies all values;

$home = ['door', 'kitchen', 'bedroom'];
array_push($home, 'bathroom', 'toilet'); // it adds new elements to the end;
array_unshift($home, 'bathroom', 'toilet'); // it adds new elements to the start;
print_r($home);
echo "<br>";

print_r(array_keys($home)); // it returns keys of array;

$vehicles = ['bike', 'car', 'plane', 'train'];
echo current($vehicles) . "<br>"; // it gets current element;
echo next($vehicles) . "<br>"; // it gets next;
echo prev($vehicles) . "<br>"; // it gets prev;
echo end($vehicles) . "<br>"; // it gets last element;
reset($vehicles); // it resets array;
echo current($vehicles) . "<br>";
echo "<br>";

$lists = ['one' => 'car', 'two' => 'bus'];
extract($lists); // it adds as sign table;
echo $one;

$numberrrr = [
    2 => 1,
    4 => 5,
    6 => 3,
    1 => 7
];
asort($numberrrr); // it sorts as value from smallest to largest with the same keys;
arsort($numberrrr); // it sorts as value from largest to smallest with the same keys;
ksort($numberrrr); // it sorts as keys from smallest to largest;
krsort($numberrrr); // it sorts as keys from largest to smallest;
print_r($numberrrr);




