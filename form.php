<html>
<body>
<style>
input
{
	border-style:soild;
	border-color:brown;
}	
</style>	
<h2 align="center">Registration form</h2>
<form action="" method="get">
<div id ="demo">
<table align="center" cellspacing="2" cellpadding="2" border="0" bgcolor="#FDESDC">
<tr>
<td><label>Usrename:</label></td>
<td><input type="text" name="frm"></td>
</tr>
<tr>
<td><label>Password:</label></td>
<td><input type="Password" name="pwd"></td>
</tr>
<tr>
<td><label>Name:</label></td>
<td><input type="Name" name="nm"></td>  
</tr>
<tr>
<td><label>Address:</label></td>
<td><input type="text" name="add"></td>
</tr>
<tr>
<td><label>Country:</label></td>
<td><select>
<option>(please select a country)</option>
<option>India</option>
<option>U.K</option>
<option>Rusia</option>
</td>
</select>
</tr>
<tr>
<td><label>Zip code:</label></td>
<td><input type="code" name="cd"></td>
</tr>
<tr>
<td><label>Email:</label></td>
<td><input type="email" name="eml"></td>
</tr>
<tr>
<td><label>Sex:</label></td>
<td><input type="radio" name="gender" id="male">male
<input type="radio" name="gender" id="female">female</td>
</tr>
<tr>
<td><label>Language:</label></td>
<td><input type="checkbox" name="eng">English
<input type="checkbox" name="non">Non English
</td>
</tr> 
<tr>
<td><label>About:</label></td>
<td><textarea name="abt" cols="30" rows="5"></textarea></td>
</tr>
<tr>
<td align="center" colspan="5"><input type="submit" name="submit"></td>
</tr>   
	
</html>
</form>
</body>


<?php


?>