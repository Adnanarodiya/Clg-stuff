<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $number = 7;
        echo"Table of $number <br>";
        for($i= 0; $i <= 10; $i++){
            $mul = $number * $i;
            
            echo"$number x $i = $mul <br>";
        }
    ?>
</body>
</html>
