<?php
function even($val)
{
	return($val%2==0);
}
$number=array(1,4,6,8,10);
print_r(array_filter($number,"even"));
?>
