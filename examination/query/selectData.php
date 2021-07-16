<?php 
$exmneId = $_SESSION['id'];

// Select Data sa nilogin nga examinee
$selExmneeData = $conn->query("SELECT * FROM users WHERE id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse =  $selExmneeData['course'];


        
// Select and tanang exam depende sa course nga ni login 
$selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id='$exmneCourse' ORDER BY ex_id DESC ");


//

 ?>