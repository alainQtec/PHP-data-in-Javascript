<?php
$name = "'Alain'";
$pagetitle = "Use ajax request"
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
    <p>This way keeps the data totaly separate, but it is a bit more complex and does potentialy takes longer from the user's point of view.</p>
    <script>
        fetch('ajax-data.php').then(function(response) {
            return response.json();
        }).then(function(data) {
            alert(data);
        })
    </script>
</body>

</html>