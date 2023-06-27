<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

print_r($_POST); // post super global;
echo "<br>";
$data = $_POST;
echo $data['name']."<br>";
echo $data['surname'];

function filter($p): array|string
{
    return is_array($p) ? array_map('filter', $p) : htmlspecialchars(trim($p));
}
echo "<pre>";
$array = array_map('filter', $data);

print_r($array);