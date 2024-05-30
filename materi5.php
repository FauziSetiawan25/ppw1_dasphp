<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo strlen("Hello world!");
    ?>
    <br>
    <?php
    echo str_word_count("Hello world!");
    ?>
    <br>
    <?php
    echo strrev("Hello world!");
    ?>
    <br>
    <?php
    echo strpos("Hello world!", "world");
    ?>
    <br>
    <?php
    echo str_replace("world", "Dolly", "Hello world!");
    ?>
</body>
</html>