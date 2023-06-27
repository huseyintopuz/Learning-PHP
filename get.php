<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = $_GET;
print_r($data);

function filter($p)
{
    return is_array($p) ? array_map('filter', $p) : htmlspecialchars(trim($p));
}
$array = array_map('filter', $data);
print_r($array);