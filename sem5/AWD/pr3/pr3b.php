<?php 
    $students = ["Adnan"=>"321","Bhavesh"=>"231","Bhumil"=>"222"];
    asort($students);
    foreach($students as $name => $marks){
        if($marks == max($students)){
            echo"$name has scored a higgest marks :- $marks";
        }
    }
?>
