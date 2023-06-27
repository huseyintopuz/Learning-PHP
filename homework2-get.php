<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html");

$data = $_GET['number'];

/**
 * @param $p
 * Buraya girilen sayının 3 e bölünebilirliğini test eder;
 * @return string
 */
function left($p): string
{
    $outcome = $p % 3;
    $total = $p + 3 - $outcome;
    return $p % 3 === 0 ? "it can be divided" : "it can not divided to 3. it can divided to $total";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" href="%PUBLIC_URL%/ms-icon-310x310.png"/>
    <link rel="shortcut icon" href="%PUBLIC_URL%/ms-icon-310x310.png">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#000000"/>
</head>
<body>

<div style="color:red;"><?=left($data);?></div>
<form action="" method="get">
    <label>Please write a number</label>
    <input type="number" name="number" value="<?=$data?>" placeholder="number"><br/>
    <button type="submit">Send</button>
</form><br>
</body>
</html>

