<?php
    for ($age=0; $age<125; $age++){

        $lastNumb=$age%10;
        if($lastNumb==1){
            $wordYear = "год";
        }
        elseif($lastNumb==2 or $lastNumb==3 or $lastNumb==4){
            $wordYear = "года";
        }
        else{
            $wordYear = "лет";
        }

        $lastNumb=$age%100;
        if($lastNumb>=10 and $lastNumb<=20){
            $wordYear = "лет";
        }

        echo $age . " " . $wordYear . " </p>";
    }
?>