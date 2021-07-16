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
                <div class="card-header">
                    <a href="home.php?page=selectAttendance">Attendance</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="search-form">
                        <form action="home.php?page=attendanceStudent" class="search-bar" method="POST">
                            <input type="search" name="search" required>
                            <button class="search-btn" type="submit" name="submit-attendance">
                                <span>Search</span>
                            </button>
                        </form>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                        <thead>
                            <tr>
                                <th>Name Of Student</th>
                                <th>Batch Name</th>
                                <th>Number of Classes Present</th>
                                <th width="30%" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- If You use search -->

                            <?php if (isset($_POST['submit-attendance'])) : ?>

                                <?php
                                unset($_POST['submit-attendance']);

                                $search = $_POST['search'];

                                $batchSQL = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC ");
                                $userSQL = $conn->query("SELECT * FROM users WHERE (username LIKE '%" . $_POST['search'] . "%') AND admin=0 ORDER BY id DESC");
                                ?>

                                <!-- If you don't search -->
                            <?php else : ?>

                                <?php
                                $batchSQL = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC ");
                                $userSQL = $conn->query("SELECT * FROM users WHERE admin=0 ORDER BY id DESC");
                                ?>

                            <?php endif; ?>

                            <?php if ($userSQL->rowCount() > 0) :
                                while (($batch = $batchSQL->fetch(PDO::FETCH_ASSOC)) && ($user = $userSQL->fetch(PDO::FETCH_ASSOC))) :

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
                                            <tr class="success">
                                                <!-- If last action was absent -->
                                            <?php else : ?>
                                            <tr class="error">
                                            <?php endif; ?>

                                            <!-- If it was updated some other day -->
                                        <?php else : ?>
                                            <tr class="tr">

                                            <?php endif; ?>

                                            <td><?php echo $user['username']; ?></td>
                                            <td>
                                                <?php
                                                $sql = mysqli_query($conn2, "SELECT * FROM course_tbl WHERE cou_id=" . $user['course'] . " ");
                                                $course = mysqli_fetch_assoc($sql);
                                                echo $course['cou_name']
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $sql =  mysqli_query($conn2, "SELECT * FROM attendance WHERE user_id=" . $user['id']);
                                                $classes = mysqli_fetch_assoc($sql);
                                                echo $classes['classes'];
                                                ?>

                                            </td>
                                            <td>

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

                                                    <!-- If last action is present -->
                                                    <?php if ($attendance['attendance'] == 1) : ?>
                                                        <button class="btn btn-sm btn-primary success" style="display: none;" id="<?php echo $user['id']; ?>" name="present">Mark Present</button>

                                                        <button class="btn btn-sm btn-primary error" id="<?php echo $user['id'] ?>" name="absent">Mark Absent </button>

                                                        <!-- If last action is absent -->
                                                    <?php else : ?>
                                                        <button class="btn btn-sm btn-primary success" id="<?php echo $user['id']; ?>" name="present">Mark Present</button>

                                                        <button class="btn btn-sm btn-primary error" style="display: none;" id="<?php echo $user['id'] ?>" name="absent">Mark Absent </button>
                                                    <?php endif; ?>

                                                    <!-- If it's updated some other day -->
                                                <?php else : ?>
                                                    <button class="btn btn-sm btn-primary success" id="<?php echo $user['id']; ?>" name="present">Mark Present</button>

                                                    <button class="btn btn-sm btn-primary error" id="<?php echo $user['id'] ?>" name="absent">Mark Absent </button>
                                                <?php endif; ?>

                                            </td>
                                            </tr>

                                        <?php endwhile; ?>

                                    <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("button[name=present]").click(function(e) {
        e.preventDefault();

        $(this).css("display", "none")
        $(this).siblings().css("display", "block")

        // $(".tr").addClass("success");
        if ($(this).parent().parent().hasClass("error")) {
            $(this).parent().parent().removeClass("error");
        }
        $(this).parent().parent().addClass("success")
        alert("present")

        $.ajax({
            type: "POST",
            url: "query/attendance.php",
            data: {
                userID: $(this).attr('id'),
                attendance: 1,
                success: 1
            },
            success: function(response) {
                // $("#classes").html(response)
            }
        });

    });

    $("button[name=absent]").click(function(e) {
        e.preventDefault();

        $(this).css("display", "none")
        $(this).siblings().css("display", "block")

        // $(this).css({"border" : "1px solid black"})
        if ($(this).parent().parent().hasClass("success")) {
            $(this).parent().parent().removeClass("success");
        }
        $(this).parent().parent().addClass("error")
        // $(".tr").addClass("error")
        alert("absent")

        $.ajax({
            type: "POST",
            url: "query/attendance.php",
            data: {
                userID: $(this).attr('id'),
                attendance: 0,
                error: 0
            },
            success: function(response) {
                // $("#classes").html(response)
            }
        });

    });
</script>