<!DOCTYPE html>
<?php
$name = 'Alain';
$age = 21
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="userage" content="<?= $age ?>"> <!-- Option1: hide it in a meta tag -->
    <title>PHP data in Javascript</title>
</head>

<body>
    <input type="hidden" name="username" value="<?= htmlspecialchars($name) ?>"> <!-- Option2: Create an empty element -->
    <script>
        var name = document.querySelector('input[name="username"]').value;
        var age = document.querySelector('meta[name="userage"]').Content;
        console.log({
            UserName: name,
            age: age
        });
        alert('Hello ' + name + 'you are ' + age + ' years old!');
    </script>
</body>

</html>