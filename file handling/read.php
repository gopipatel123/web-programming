<?php
/*$myfile=fopen("b1_220801013.txt","r");
echo fgets($myfile);*/

/*$myfile=fopen("b1_220801013.txt","w");
$text="hello";
echo fwrite($myfile,$text);*/

/*$new="hello world";
file_put_contents("b1_220801013.txt",$new,FILE_APPEND);*/

if(unlink("b1_220801013.txt"))
{
	echo "file delete";
}
else
{
  echo "not delete";
}  



?>