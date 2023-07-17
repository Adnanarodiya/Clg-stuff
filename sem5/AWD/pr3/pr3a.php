<?php 
    $arr = [10,5,9,1,2,8,3,7,4,6];
    echo "Unsorted Array :- ";
    for($i = 0 ; $i < count($arr); $i++){
        echo "$arr[$i]";
        if($i!=count($arr)-1){
            echo ",";
        }
    }

    echo "<br>Sorted Array :- ";
    sort($arr);
    for($i = 0; $i <= count($arr); $i++){
        echo $arr[$i];
        if($i!=count($arr)-1){
            echo ",";
        }
    }

?>
