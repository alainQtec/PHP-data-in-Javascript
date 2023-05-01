<?php
$pagetitle = 'Use cookies';
$name = "Alain";
setcookie("name", $name);
setcookie("age", 21);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP data in Javascript | <?= $pagetitle ?></title>
</head>

<body>
    <H1><?= $pagetitle ?></H1>
    <br>
    <p>This method doesn't mix php into the html or javascript. so they can be kept separate</p>
    <br>
    <p>The cookie can store small amounts of data though, so this is not suitable for large amounts of data.</p>
    <br>
    <p>On the plus side, this does keep it all within one request.</p>
    <br>
    <p>This is fine if its for a simple page and its the simplest way to do it.</p>
    <script>
        var name = decodeURIComponent(document.cookie.match(new RegExp('name=([^;]+)'))[1]);
        var age = decodeURIComponent(document.cookie.match(new RegExp('age=([^;]+)'))[1]);
        console.log({
            username: name,
            age: age
        });
    </script>
</body>

</html>