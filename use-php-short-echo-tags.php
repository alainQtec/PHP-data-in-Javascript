<?php
$name = "'Alain'";
$pagetitle = "php short echo tags"
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
    <script>
        var name = <?= json_encode($name) ?>;
        console.log({
            UserName: name
        });
        alert('Hello ' + name)
    </script>
</body>

</html>