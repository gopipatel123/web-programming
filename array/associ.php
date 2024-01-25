<?php
$student_details=array("index"=>1,"name"=>"fena","roll_no"=>6,"address"=>"rajkot","subject"=>"php","per"=>"80%","division"=>"b","phone_no"=>9947640673,"age"=>20,"program"=>"bca");
print_r ($student_details);

foreach($student_details as $my_detali)
{
	print_r ($my_detali);
    echo "<br>";
}
?>