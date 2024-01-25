<?php
$student_master=array(
               array("name"=>"fena","roll_no"=>6),
              array("city"=>"rajkot","colloge"=>"atmiya"),
			  array("divi"=>"b1","program"=>"bca")
			  );
			  
//print_r($student_master);

foreach($student_master as $stud)
{
	print_r ($stud);
    echo "<br>";
}
?>