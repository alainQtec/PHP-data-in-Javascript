<!DOCTYPE html>
<?php
$pagetitle = "html-element";
$name = 'Alain';
$age = 21
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="userage" content="<?= $age ?>"> <!-- Option1: Pass it in a meta tag -->
    <title>PHP data in Javascript | <?= $pagetitle ?></title>
</head>

<body>
    <H1><?= $pagetitle ?></H1>
    <input type="hidden" name="username" value="<?= htmlspecialchars($name) ?>"> <!-- Option2: Create an empty element -->
    <h1 data-pageid="08c37a32f20a3">Page 3</h1> <!-- Option3: Use data attributes in html elements -->
    <script>
        var pageid = document.querySelector('h1').dataset.pageid;
        var name = document.querySelector('input[name="username"]').value;
        var age = document.querySelector('meta[name="userage"]').Content;
        console.log({
            pageid: pageid
        });
        console.log({
            UserName: name,
            age: age
        });
        alert('Hello ' + name + ' you are ' + age + ' years old!');
    </script>
</body>

</html>