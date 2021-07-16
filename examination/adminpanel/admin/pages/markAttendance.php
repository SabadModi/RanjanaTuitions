<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>MARK ATTENDANCE</div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    <a href="home.php?page=attendanceBatch">
                        Attendance for "
                        <?php
                        $batchID = $_GET['batch_id'];
                        $selBatchSQL = mysqli_query($conn2, "SELECT * FROM course_tbl WHERE cou_id=$batchID");
                        $selBatch = mysqli_fetch_assoc($selBatchSQL);
                        echo $selBatch['cou_name'];
                        ?>
                        "
                    </a>
                </div>
                <div class="table-responsive">
                    <div class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <?php

                        $batchID = $_GET['batch_id'];
                        $selBatchSQL = mysqli_query($conn2, "SELECT * FROM course_tbl WHERE cou_id=$batchID");
                        $selBatch = mysqli_fetch_assoc($selBatchSQL);

                        $courseID = $selBatch['cou_id'];
                        $userCourse = $conn->query("SELECT * FROM users WHERE course=$courseID AND admin=0");
                        // $userCourse = mysqli_fetch_all($userCourseSQL);
                        ?>
                        <?php while ($user = $userCourse->fetch(PDO::FETCH_ASSOC)) :  ?>
                            <?php

                            $sql = mysqli_query($conn2, "SELECT * FROM attendance WHERE user_id=" . $user['id']);
                            $attendance = mysqli_fetch_assoc($sql);

                            $dt = new DateTime($attendance['updated_at']);
                            $date = $dt->format('Y-m-d');
                            $currentDate = date("Y-m-d");

                            ?>
                            <!-- If its updated today -->
                            <?php if ($date == $currentDate) : ?>
                                <?php
                                $sql = mysqli_query($conn2, "SELECT * FROM attendance WHERE user_id=" . $user['id']);
                                $attendance = mysqli_fetch_assoc($sql);
                                ?>

                                <!-- If last action was present -->
                                <?php if ($attendance['attendance'] == 1) : ?>
                                    <div class="attendance-inner success" id="<?php echo $user["id"]; ?>">

                                        <!-- If last action was absent -->
                                    <?php else : ?>
                                        <div class="attendance-inner error" id="<?php echo $user["id"]; ?>">

                                        <?php endif; ?>

                                        <!-- If it was updated some other day -->
                                    <?php else : ?>

                                        <div class="attendance-inner error" id="<?php echo $user["id"]; ?>">
                                        <?php endif; ?>
                                        <img src="assets/images/userProfile.svg"></img>
                                        <?php
                                        echo $user["username"];
                                        echo $user["id"];
                                        ?>
                                        <input type="text" value="<?php echo $user[0]; ?>" id="userID" style="display: none;">
                                        </div>

                                    <?php endwhile; ?>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script>
                $(".attendance-inner").click(function(e) {
                    e.preventDefault();

                    if ($(this).hasClass("error")) {

                        $(this).removeClass("error");
                        $(this).addClass("success");

                        $.ajax({
                            type: "POST",
                            url: "query/attendance.php",
                            data: {
                                userID: $(this).attr('id'),
                                attendance: 1,
                                success: 1
                            },
                            success: function(response) {
                                alert("Response: " + response)
                            }
                        });

                        alert("ID:- " + $(this).attr('id'))

                    } else if ($(this).hasClass("success")) {

                        $(this).removeClass("success");
                        $(this).addClass("error");

                        $.ajax({
                            type: "POST",
                            url: "query/attendance.php",
                            data: {
                                userID: $(this).attr('id'),
                                attendance: 0,
                                error: 0
                            },
                            success: function(response) {
                                alert("Response: " + response)
                            }
                        });

                        alert("success")
                    }
                });
            </script>