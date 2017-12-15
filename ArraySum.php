<?php
$array1 = array(5,6,7,8,9,10,11,12,13,14);
$array2 = array(0,2,4,6,8,10,12,14,16,18);
$array3 = ArraySum ($array1, $array2);


function ArraySum($array1,$array2) {

    $a = array();

    for ($i=0; $i<count($array1); $i++) { 
         $a[$i] = $array1[$i] + $array2[$i] ; 
    }

return $a;

}

print_r  ($array3);


?>