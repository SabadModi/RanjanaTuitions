<?php
include("../../../path.php");
include(ROOT_PATH . "/app/database/db.php");
include("query/addExamineeExe.php");
?>

<script src="../../../push.js-master/bin/push.js"></script>

<?php
if (!isset($_SESSION['admin']) == true) header("location:/index.php");

if (date('Y-m-d') == date('Y-m-01')) {
  $sql = mysqli_query($conn, "UPDATE attendance SET classes=0");
}

// $sql = mysqli_query($conn, "UPDATE cee_db.attendance SET feeClasses = 0 WHERE feeClasses >= 8");
?>

<!-- HEADER -->
<?php include("includes/header.php"); ?>

<!-- UI THEME  -->
<?php include("includes/ui-theme.php"); ?>

<div class="app-main">
  <!-- Sidebar  -->
  <?php include("includes/sidebar.php"); ?>


  <?php
  @$page = $_GET['page'];


  if ($page != '') {

    if ($page == "add-course") {
      include("pages/add-course.php");
    } else if ($page == "manage-course") {
      include("pages/manage-course.php");
    } else if ($page == "manage-exam") {
      include("pages/manage-exam.php");
    } else if ($page == "manage-examinee") {
      include("pages/manage-examinee.php");
    } else if ($page == "ranking-exam") {
      include("pages/ranking-exam.php");
    } else if ($page == "feedbacks") {
      include("pages/feedbacks.php");
    } else if ($page == "examinee-result") {
      include("pages/examinee-result.php");
    } else if ($page == "selectAttendance") {
      include("pages/selectAttendance.php");
    } else if ($page == "attendanceBatch") {
      include("pages/attendanceBatch.php");
    } else if ($page == "attendanceStudent") {
      include("pages/attendanceStudent.php");
    } else if ($page == "markAttendance") {
      include("pages/markAttendance.php");
    }
  } else {
    include("pages/home.php");
  }


  ?>


  <!-- FOOTER -->
  <?php include("includes/footer.php"); ?>

  <?php include("includes/modals.php"); ?>