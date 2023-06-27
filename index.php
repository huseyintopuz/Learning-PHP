<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Hello World";
echo "<br>";
$isim = "Hüseyin ";
echo $isim;
$soyisim = "Topuz";
echo $soyisim . "<br>";
$_link = "bocek.net";
echo $_link . "<br>";
$villa = "Villa Emo ";
$a = 5;
/*echo "<script>
		alert('Talebiniz Ulaştı En Kısa Sürede Size Dönüş Yapacağız');
	</script>";*/

const NAME = "HUSEYIN";
echo NAME;
echo "<br>";
$a = 444.5;
echo gettype($a) . "<br>";

echo gettype(NAME) . "<br>";

$a = 5;
$b = 19;
echo $a++;
echo "<br>";
echo $a . "<br>";

echo $a += 3;
echo "<br>";

echo $b %= 3;
echo "<br>";

$c = "Hi! ";
$d = "I am Huseyin.";
var_dump($d);

echo "<br>";
echo $c . "<br>";

$first = 15;
$second = 20;

$output = ($first == $second || $first == 14);
var_dump($output);
echo "<br>";

$condition = 5;

switch ($condition) {
    case 1:
        echo "1. condition executed";
        break;
    case 2:
        echo "2. condition executed";
        break;
    case 5:
        echo "3. condition executed";
        break;
    default;
}
echo "<br>";
$titles = array();
$titlesSecond = [];
echo gettype($titles);
echo "<br>";
echo gettype($titlesSecond);
echo "<br>";

$jobTitles = array('React Developer', 'Php Developer', 'Front End Developer', 'Back End Developer');
echo "<pre>";
print_r($jobTitles);
var_dump($jobTitles); // it gives the array value with detail as type, length.

$animals = [
    'birds' => ['eagle', 'hawk', 'duck'],
    'reptiles'
];
echo "<pre>";
echo $animals['birds'][2];
echo "<br>";

$i = 0;
/*while ($i <= 10) {
    echo $i . "." . "Selam" . "<br>";
    $i++;
}*/
// OR
while ($i++ <= 10) {
    echo $i . "." . "Selam" . "<br>"; // index starts from 1;
}
echo "<br>";

function sum($x, $y)
{
    return $x + $y;
}

//echo sum(3, 5);
$sumFunction = sum(3, 5); // i can define function as a variable.
echo $sumFunction;
echo "<br>";
// anonymous function

$subtract = function ($x, $y) {
    return $x - $y;
};
echo $subtract(6, 3);
echo "<br>";
echo "<br>";
echo "<br>";

$numbers = [
    5, 6, 7
];

echo $numbers[1] ;

$numbers = array_map(function ($e) {
    return 3 * $e;
}, $numbers);

print_r($numbers);

$process = [
    'sum' => function ($x, $y) {
        return $x + $y;
    },
    'subtract' => function ($x, $y) {
        return $x - $y;
    },
    'multiply' => function ($x, $y) {
        return $x * $y;
    },
    'divide' => function ($x, $y) {
        return $x / $y;
    },
];

echo $process['sum'](10, 5) . "<br>";
echo $process['subtract'](10, 5) . "<br>";
echo $process['multiply'](10, 5) . "<br>";
echo $process['divide'](10, 5) . "<br>";

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Front-End'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Back-End'
    ],
    [
        'id' => 3,
        'parent' => 1,
        'name' => 'ReactJS'
    ],
    [
        'id' => 4,
        'parent' => 2,
        'name' => 'PHP'
    ],
    [
        'id' => 5,
        'parent' => 2,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Laravel'
    ],
    [
        'id' => 7,
        'parent' => 5,
        'name' => 'ExpressJS'
    ]
];

// recursive function
function getCategories($arr, $par = 0)
{
    $html = "";
    $html .= "<ul>";
    foreach ($arr as $value) {
        if ($value['parent'] == $par) {
            $html .= "<li>";
            $html .= $value['name'];
            $html .= getCategories($arr, $value['id']);
            $html .= "</li>";
        }
    }
    $html .= "</ul>";
    return $html;
}

echo getCategories($categories);

// static function

function say()
{
    static $number = 0;
    echo $number . "<br>";
    $number++;
}

say();
say();
say();

// global function

$name = "Hüseyin";
function getName()
{
    global $name;
    echo $name;
}

getName();