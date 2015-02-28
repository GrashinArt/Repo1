<?php
srand();
$myArray=array();
$myArraySize=rand(0,100);
echo "Size of Array: " . $myArraySize . "<br>";
$i=0;
for($i=0; $i<$myArraySize; $i++){
    $myArray[$i]=rand(-100,100);
    // echo $i . ": " . $myArray[$i] . " ";
}

// echo "<br>";

$maxSequence=array();
$maxSize=0;
$j=0;

for($i=0; $i<$myArraySize; $i++){
    echo $myArray[$i] . " ";
    if($myArray[$i]>0){
        $temp[$j]=$myArray[$i];
        $j++;
    }
    else{
        if($maxSize<=$j){
            $maxSize=$j;
            $maxSequence=$temp;
            // print_r($temp);
        }
        $j=0;
        $temp=[];
        echo "<br>";
    }
}

echo "<br> Max Length of positive sequence: " . $maxSize . "<br>";
print_r($maxSequence);
?>
