<?php
include("../../../conn.php");
$id = $_GET['id'];

$selExmne = $conn->query("SELECT * FROM users WHERE id='$id' ")->fetch(PDO::FETCH_ASSOC);

?>

<fieldset style="width:543px;">
   <legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selExmne['username']); ?> )</b></i></legend>
   <div class="col-md-12 mt-4">
      <form method="post" id="updateExamineeFrm">
         <div class="form-group">
            <legend>Fullname</legend>
            <input type="hidden" name="exmne_id" value="<?php echo $id; ?>">
            <input type="" name="exFullname" class="form-control" required="" value="<?php echo $selExmne['username']; ?>">
         </div>

         <div class="form-group">
            <legend>Batch</legend>
            <?php
            $exmneCourse = $selExmne['course'];
            if ($exmneCourse == null) {
               $selCourse = null;
            } else {
               $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$exmneCourse' ")->fetch(PDO::FETCH_ASSOC);
            }
            ?>
            <select class="form-control" name="exCourse">
               <?php if ($selCourse != null) : ?>
                  <option value="<?php echo $exmneCourse; ?>"><?php echo $selCourse['cou_name']; ?></option>
               <?php else : ?>
                  <option value="0">Select Batch</option>

               <?php endif; ?>
               <?php
               $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id!='$exmneCourse' ");
               while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
               <?php  }
               ?>
            </select>
         </div>

         <div class="form-group">
            <legend>Email</legend>
            <input type="email" name="exEmail" class="form-control" required="" value="<?php echo $selExmne['email']; ?>">
         </div>

         <div class="form-group" align="right">
            <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
         </div>
      </form>
   </div>
</fieldset>