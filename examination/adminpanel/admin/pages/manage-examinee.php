<link rel="stylesheet" type="text/css" href="css/mycss.css">
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>MANAGE EXAMINEE</div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Examinee List
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Batch</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selExmne = $conn->query("SELECT * FROM users  WHERE admin=0 ORDER BY id DESC ");
                            if ($selExmne->rowCount() > 0) {
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td><?php echo $selExmneRow['username']; ?></td>
                                        <td><?php echo $selExmneRow['email']; ?></td>
                                        <td>
                                            <?php
                                            $sql = mysqli_query($conn2, "SELECT * FROM course_tbl WHERE cou_id=".$selExmneRow['course']."");
                                            $course = mysqli_fetch_assoc($sql);
                                            echo $course['cou_name'];
                                            ?>
                                        </td>
                                        <td>
                                            <a rel="facebox" href="facebox_modal/updateExaminee.php?id=<?php echo $selExmneRow['id']; ?>" class="btn btn-sm btn-primary">Update</a>

                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="2">
                                        <h3 class="p-3">No Course Found</h3>
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