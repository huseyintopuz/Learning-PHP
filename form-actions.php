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
<form action="post.php" method="post">
    <input type="text" name="name" placeholder="name"><br />
    <input type="text" name="surname" placeholder="surname"><br />
    <label>Languages</label>
    <label>PHP</label>
    <input type="checkbox" value="php" name="language[]"><br>
    <label>NODEJS</label>
    <input type="checkbox" value="node" name="language[]"><br>
    <label>JS</label>
    <input type="checkbox" value="js" name="language[]"><br>

    <button type="submit">Send</button>
</form>
</body>
</html>
