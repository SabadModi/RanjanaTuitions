<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>ATTENDANCE</div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Attendance
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th>Batch Name</th>
                                <th>Number of Students</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selExmne = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC ");
                            $selExaminee = $conn->query("SELECT * FROM users WHERE admin=0 ORDER BY id DESC");
                            if ($selExmne->rowCount() > 0) {
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        
                                        <td><?php echo $selExmneRow['cou_name']; ?></td>
                                        <td>
                                            <?php

                                            $courseID = $selExmneRow['cou_id'];
                                            // $sql = $conn->query("SELECT * FROM users WHERE course=$courseID");
                                            $userCourse = mysqli_query($conn2, "SELECT * FROM users WHERE course=$courseID AND admin=0");
                                            // $userCourse = $sql->fetch(PDO::FETCH_ASSOC);
                                            echo mysqli_num_rows($userCourse);
                                            ?>
                                        </td>
                                        <td>
                                            <a href="home.php?page=markAttendance&batch_id=<?php echo $selExmneRow['cou_id']; ?>" class="btn btn-sm btn-primary">Mark Attendance</a>

                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="2">
                                        <h3 class="p-3">No Batch Found</h3>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>