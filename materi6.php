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
    function writeMsg(){
        echo "Hello World!";
    }

    writeMsg();
    ?>
    <br>
    <?php 
    function familyName($fname){
        echo "$fname Jaeger. <br>";
    }

    familyName("Jani");
    familyName("Hage");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    ?>

    <?php
        function familyName2($fname, $year){
            echo "$fname Jaeger. Born in $year <br>";
        }

    familyName2("Hage", "1975");
    familyName2("Stale", "1978");
    familyName2("Kai Jim", "1983");
    ?>

    <?php
    function setHeight($minHeight = 50){
        echo "The height is : $minHeight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);
    ?>

    <?php 
    function sum($x, $y){
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4)
    ?>
</body>
</html>