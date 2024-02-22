<?php
function sum($carry,$item)
{
	$carry+=$item;
	return $carry;
}
$number=array(1,4,3,5,6,7);
$value=array_reduce($number,"sum");
print_r($value);

?>
