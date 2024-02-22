<?php
$arr1=array("a","b","c");
$arr2=array("d","e","f");
$b=array_merge($arr1,$arr2);
foreach($b as $value)
{
	echo "$value";
	echo "<br>";
}
?>