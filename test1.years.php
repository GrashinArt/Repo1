<?php
for ($age=0; $age<125; $age++){
    $lastNumb=$age%100;
    if($lastNumb>=10 and $lastNumb<=20){
        $wordYear = "лет";
    }
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
    echo " Вам " . $age . " " . $wordYear . " </p>";


   // switch($lastNumb=$age%10){
   // case 1: $wordYear = "год"; break;
   // case 2: $wordYear = "года"; break;
   // case 3: $wordYear = "года"; break;
   // case 4: $wordYear = "года"; break;
   // default : $wordYear = "лет"; break;
    }

}
?>