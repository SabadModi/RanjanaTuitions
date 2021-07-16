<div class="app-main__outer">
    <div id="refreshData">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Teachers Dashboard
                            <div class="page-title-subheading">This is your dashboard.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Course</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selCourse['totCourse']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Exam</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selExam['totExam']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Examinee</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>46%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>$14M</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <?php include("includes/graph.php"); ?> -->

            <?php
            include("../../conn.php");

            $sql = mysqli_query($conn2, "SELECT * FROM attendance WHERE feeClasses >= 8");
            $rows = mysqli_num_rows($sql);

            $fee = mysqli_fetch_all($sql, MYSQLI_ASSOC);

            if ($rows > 0) :

                foreach ($fee as $classes) : ?>
                    <?php

                    $sql = mysqli_query($conn2, "SELECT * FROM users where id=" . $classes['user_id']);
                    $user = mysqli_fetch_assoc($sql);

                    $sql3 = mysqli_query($conn2, "SELECT * FROM course_tbl WHERE cou_id=" . $user['course']);
                    $batch = mysqli_fetch_assoc($sql3);

                    ?>
                    <script>
                        Push.create("Fee Reminder!", {
                            body: "<?php echo $user['username'] ?> - <?php echo $user['email']; ?> from <?php echo $batch['cou_name']; ?> has finished his/her 8 Classes. Please collect Fees",
                            icon: '../../../assets/svg/logo.png',
                            requireInteraction: true,
                            vibrate: 120000,
                            onClick: function() {
                                window.focus();
                                this.close();
                            }
                        });
                    </script>

                    <?php
                    $sql = mysqli_query($conn2, "UPDATE cee_db.attendance SET feeClasses = 0 WHERE id=" . $classes['id']);
                    ?>

                <?php endforeach; ?>

            <?php endif; ?>


        </div>

    </div>
