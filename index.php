<?php
$server = $_SERVER;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="server" content="<?= $server ?>">
    <title>PHP data in Javascript</title>
</head>

<body>
    <p>Home</p>
    <script>
        var server = document.querySelector('meta[name="server"]').content
        console.log({
            server: server
        })
    </script>
</body>

</html>