<?php
$number = 5; 

$factorial = 1;

if ($number < 0) 
 {
    echo "Factorial is not defined for negative numbers.";
 }
 elseif ($number == 0)
 {
    echo "The factorial of 0 is 1.";
} 
else
 {
    for ($i = 1; $i <= $number; $i++) 
	{
        $factorial *= $i;
    }
    echo "The factorial of " . $number . " is " . $factorial . ".";
}
?>
