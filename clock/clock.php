<html>
<head>
<meta http-equiv="refresh" content="1" />
</head>
</html>
<style>
div
{
	padding-top:50px;
    padding-bottom:50px;
}
tr
{ 
   align:center;
   color:white;
   
  
}
.demo
{
	color:red;
   
  
}
#dgfont
{
	font-size:100px;
	   
}
@font-face 
{
    font-family:'digital-7';
    src:url('digital-7.ttf');
}
.dg
{
	font-family:digital-7;
	font-color:red;
}
</style>
<?php

date_default_timezone_set("Asia/Kolkata");
$d=date('h');
$e=date('i'); 
$f=date('s');
$date=date('d-m-y');
$day=date('D');
echo "<div class=demo><table bgcolor=black border=0 align=center cellspacing=10 cellpadding=20>
<tr align=center bgcolor=#800000>
		<td id=dgfont class=dg>$d</td> 
		<td id=dgfont class=dg>$e</td>
		<td id=dgfont class=dg>$f</td>
	  </tr>
	  
	  <tr>
	  <td>HOURS</td>
      <td>MINUTE</td>
      <td>SECOND</td>
	  </tr>
	  
	  <tr>
	  <td>$date</td>
	  <td>$day</td>
	  </tr>
	 
</table>
</div>";











?>

