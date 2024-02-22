<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange","c"=>"maroon");
array_splice($a1,0,3,$a2);
print_r($a1);
?>