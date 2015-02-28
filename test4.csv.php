<?php
$header=NULL;

// $source = fopen("test4.csv", "r");
// $new = fopen("new.csv", "a");

if (($source = fopen("test4.csv", 'r')) !== FALSE){
        while (($row = fgetcsv($source, 1000, ";")) !== FALSE){
            if(!$header){
                $header = $row;
                if (($out = fopen("out.csv", "a")) !== FALSE){
                    fputcsv($out, $header);
                }
                print_r($header);
            }
            else{
                $row[3]*=1.15;
                if (($out = fopen("out.csv", "a")) !== FALSE){
                    fputcsv($out, $row);
                    fputcsv($out, $row);
                }
                print_r($row);
            }
        }
        fclose($source);
        fclose($out);
    }

// while (($data = fgetcsv($source, 0, ";")) !== FALSE) {
//     $num = count($data);
//     echo $data[3]*=1.15;
//     echo "<br>\n";
// }

?>