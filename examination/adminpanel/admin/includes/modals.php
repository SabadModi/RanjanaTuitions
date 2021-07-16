<?php error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!-- Modal For Add Course -->
<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="refreshFrm" id="addCourseFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course</label>
              <input type="" name="course_name" id="course_name" class="form-control" placeholder="Input Course" required="" autocomplete="off">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Now</button>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse-<?php echo $selCourseRow['cou_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <form class="refreshFrm" id="addCourseFrm" method="post">
      <div class="modal-content myModal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update ( <?php echo $selCourseRow['cou_name']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course</label>
              <input type="" name="course_name" id="course_name" class="form-control" value="<?php echo $selCourseRow['cou_name']; ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Now</button>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- Modal For Add Exam -->
<div class="modal fade" id="modalForExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="refreshFrm" id="addExamFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Exam</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Select Course</label>
              <select class="form-control" name="courseSelected">
                <option value="0">Select Course</option>
                <?php
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                if ($selCourse->rowCount() > 0) {
                  while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php }
                } else { ?>
                  <option value="0">No Course Found</option>
                <?php }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Exam Time Limit</label>
              <select class="form-control" name="timeLimit" required="">
                <option value="0">Select time</option>
                <option value="10">10 Minutes</option>
                <option value="20">20 Minutes</option>
                <option value="30">30 Minutes</option>
                <option value="40">40 Minutes</option>
                <option value="50">50 Minutes</option>
                <option value="60">60 Minutes</option>
              </select>
            </div>

            <div class="form-group">
              <label>Question Limit to Display</label>
              <input type="number" name="examQuestDipLimit" id="" class="form-control" placeholder="Input question limit to display">
            </div>

            <div class="form-group">
              <label>Exam Title</label>
              <input type="" name="examTitle" class="form-control" placeholder="Input Exam Title" required="">
            </div>

            <div class="form-group">
              <label>Exam Description</label>
              <textarea name="examDesc" class="form-control" rows="4" placeholder="Input Exam Description" required=""></textarea>
            </div>


          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Now</button>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- Modal For Add Examinee -->
<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="refreshFrm" id="register-form" name="register-form" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">

            <div class="form-group">
              <label>Fullname</label>
              <input type="text" name="username" id="username" placeholder="Your Name" class="form-control" required="Please enter student name" value="<?php echo $username; ?>">
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" placeholder="Your Email" class="form-control" required="Please enter student email" value="<?php echo $email; ?>">
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="Please enter your Password" value="<?php echo $password; ?>"
              data-parsley-minlength="5">
            </div>

            <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="passwordConf" id="passwordConf" placeholder="Repeat your password" class="form-control" required="Please enter your Password" value="<?php echo $passwordConf; ?>"
              data-parsley-minlength="5">
            </div>

            <div class="form-group">
              <label>Course</label>
              <select class="form-control" name="course" id="course">
                <option value="0">Select course</option>
                <?php
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Admin</label>
              &nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="admin" id="admin" autocomplete="off" value="0" onclick="check()">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="submitUser" value="Add Now">
        </div>
      </div>
    </form>
  </div>
</div>

<!-- JS -->
<script src="../../../../login/vendor/jquery/jquery.min.js"></script>

<!-- Parsley -->
<script src="../../../../parsley/dist/parsley.min.js"></script>

<script>

  function check() {
    if (admin.checked == true) {
      admin.value = "1";
      alert(admin.value);

    } else {
      admin.value = "0";
      alert(admin.value);
    }
  }

</script>

<script src="/examination/adminpanel/admin/assets/scripts/register.js"></script>

<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="refreshFrm" id="addQuestionFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Question for <br><?php echo $selExamRow['ex_title']; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="refreshFrm" method="post" id="addQuestionFrm">
          <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <label>Question</label>
                <input type="hidden" name="examId" value="<?php echo $exId; ?>">
                <input type="" name="question" id="course_name" class="form-control" placeholder="Input question" autocomplete="off">
              </div>

              <fieldset>
                <legend>Input word for choice's</legend>
                <div class="form-group">
                  <label>Choice A</label>
                  <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="Input choice A" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Choice B</label>
                  <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="Input choice B" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Choice C</label>
                  <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="Input choice C" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Choice D</label>
                  <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="Input choice D" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Correct Answer</label>
                  <input type="" name="correctAnswer" id="" class="form-control" placeholder="Input correct answer" autocomplete="off">
                </div>
              </fieldset>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Now</button>
          </div>
        </form>
      </div>
    </form>
  </div>
</div>