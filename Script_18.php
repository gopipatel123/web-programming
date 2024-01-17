<?php
$randomNumber = rand(1, 10); 


$userGuess = $_POST['guess']; 

if ($userGuess == $randomNumber) {
    echo "Congratulations! You guessed it right. The number was " . $randomNumber . ".";
} else {
    echo "Oops! Your guess was incorrect. The number was " . $randomNumber . ".";
}
?>
