<?php
 include("../../../conn.php");
 extract($_POST);


$updCourse = $conn->query("UPDATE users SET username='$exFullname', email='$exEmail', course='$exCourse' WHERE id='$exmne_id' ");
if($updCourse)
{
	   $res = array("res" => "success", "exFullname" => $exFullname);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>