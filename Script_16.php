<?php
$sentence = "Hello, how are you?"; 

$vowelCount = 0;
$vowels = ['a', 'e', 'i', 'o', 'u'];

foreach (str_split($sentence) as $char)
 {
    if (in_array(strtolower($char), $vowels)) 
	{
        $vowelCount++;
    }
 }

echo "The number of vowels in the sentence is: " . $vowelCount;
?>
