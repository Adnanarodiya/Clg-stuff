<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 370;
        $sum = 0;
        for($i = $number; $i!=0; $i/=10){
            $x = $i % 10;
            $sum += $x*$x*$x;
        }
        if($sum == $number){
            echo"The give number $number is Armstrong number";
        }else{
            echo"The give number $number is Not Armstrong number";
        }

    ?>
</body>
</html>
