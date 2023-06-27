<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = "Hüseyin";

echo "<pre>";
echo mb_strlen($name); // it gives length of string;
echo "<pre>";
print_r(mb_str_split($name, 2));
echo "<br>";

$sentence = "Carroll likes animals!";
$array = explode(' ', $sentence);

echo(implode('#', $array))."<br>";

$surname = "    Tyson    ";
echo ltrim($surname)."<br>"; // it removes left spaces;
echo rtrim($surname)."<br>"; // it removes right spaces;
echo trim($surname)."<br>"; // it removes all spaces;

$sentence = substr($sentence, 4, 7); // it returns "oll lik";
echo $sentence."<br>";

$secondName = "şakir sağır";
echo mb_strtolower($secondName)."<br>"; // it is used if it is not an English letter;
echo mb_strtoupper($secondName)."<br>";
echo ucfirst($secondName)."<br>";
echo ucwords($secondName)."<br>";

$secondName = str_replace("sakir", "hakan", $secondName);
echo $secondName."<br>";

$secondSentence = "I am learning\n PHP";
echo nl2br($secondSentence)."<br>"; // it gets "br" instead of "\n";

$password = "12345";
$db_password = "827ccb0eea8a706c4c34a16891f84e7b";
echo md5($password)."<br>";

if(md5($password) === $db_password) {
    echo "password successes";
} else {
    echo "password fails";
}
echo "<br>";

$email = "huseyin.topuz35@gmail.com";
echo strstr( $email, '@');