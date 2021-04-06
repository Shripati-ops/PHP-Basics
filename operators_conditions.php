<?php
$x = 78;
$y = 56;

//Arithmetic Operators
//Addition
echo "Arithmetic operations","<br>";

echo $x + $y, "<br>";

//Subtraction
echo $x - $y, "<br>";

//Multiplication
echo $x * $y, "<br>";

//division

echo $x / $y, "<br>";

// Logical Operators

echo "Logical Operators and Relational Operators","<br><br>";
echo "<br>";
if($x > $y || $y < $x){
    echo "X is Greater than Y";
}
if($GLOBALS[x] + $GLOBALS[y] == 134){
    echo $x + $y;
}
else{
    echo "Addition of the number is incorrect","<br><br>";
}

echo "Assignment Operators","<br><br>";
$a = 3;
$b = 4;
function swap($a,$b){
    echo "Before Swapping", $a ," " ,$b,"<br><br>";
      $temp = 0;
      $temp = $a;
      $a = $b;
      $b = $temp;
    echo "After Swapping" , $a," ",$b,"<br><br>";
}
swap($a,$b);
?>