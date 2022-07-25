<?php
function myname(){
    echo "My name is Mostafa Ahmed <br>";
}
myname();

// Arguments & Parameters 
function sum($a,$b){
    // $a=10; for parameter
    // $b=20;
    $sum=$a+$b ;

    echo $sum;
}
sum(20,10); // for argument
echo "<br>";

//Default Argument

function mul($a,$b=5){
    // $a=10; for parameter
    // $b=20;
    $mul=$a+$b;

    echo $mul;
}
mul(20,10); // for argument
echo "<br>";
mul(20); // in this line 5 is default value  ---- b=5



?>