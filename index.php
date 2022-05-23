<?php
    // comment
    /*
        multiline commment
    */

    $a = 10;
    $b = 20;

    $r = $a + $b;
    echo "A + B = " . $r;
    echo "<br>";

    if($a > $b){
        echo $a . " > " . $b;
    }
    elseif($a == $b){
        echo $a . " = " . $b;
    }
    else{
        echo $a . " < " . $b;
    }
    echo "<br>";

    $index_array = ['a', 'b', 'c', 1234];

    //echo $index_array[3];

    $associative_array = ["1" => "test", "pens" => 10, "erasers" => 2];

    //echo $associative_array["1"];

/*
    for($i = 1; $i <= 20; $i++){
        echo $i . "\n";
    }

*/
/*
    while ($a < $b){
        echo $a . "\n";
        $a++;
    }
*/

/*
foreach($associative_array as $ar){
    echo $ar . "\n";
}
*/
?>

<!DOCTYPE html>
<html lang="en">