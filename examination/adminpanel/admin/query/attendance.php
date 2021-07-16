<?php
include("../../../conn.php");

if (isset($_POST['success'])) {

    $sql = mysqli_query($conn2, "INSERT INTO attendance (user_id, attendance, classes, feeClasses)
    VALUES (" . $_POST['userID'] . ", " . $_POST['attendance'] . ", 1, 1)
    ON DUPLICATE KEY UPDATE classes = classes + 1");

    $sql = mysqli_query($conn2, "INSERT INTO attendance (user_id, attendance, classes, feeClasses)
    VALUES (" . $_POST['userID'] . ", " . $_POST['attendance'] . ", 1)
    ON DUPLICATE KEY UPDATE attendance=1");

    $sql = mysqli_query($conn2, "INSERT INTO attendance (user_id, attendance, classes, feeClasses)
    VALUES (" . $_POST['userID'] . ", " . $_POST['attendance'] . ", 1, 1)
    ON DUPLICATE KEY UPDATE feeClasses = feeClasses + 1");

    $sql2 = mysqli_query($conn2, "SELECT * FROM attendance where user_id=" . $_POST['userID']);
    $classes = mysqli_fetch_assoc($sql2);
    echo $classes['classes'];
}

if (isset($_POST['error'])) {
    $sql = mysqli_query($conn2, "SELECT * FROM attendance WHERE user_id=" . $_POST['userID']);
    $attendance = mysqli_fetch_assoc($sql);

    $dt = new DateTime($attendance['updated_at']);
    $date = $dt->format('Y-m-d');
    $currentDate = date("Y-m-d");

    if ($date == $currentDate) {
        $sql = mysqli_query($conn2, "UPDATE attendance SET classes = classes - 1 WHERE user_id=" . $_POST['userID']) or die(mysqli_error($conn2));
        $sql = mysqli_query($conn2, "UPDATE attendance SET attendance=0 WHERE user_id=" . $_POST['userID']) or die(mysqli_error($conn2));

        $sql2 = mysqli_query($conn2, "SELECT * FROM attendance where user_id=" . $_POST['userID']);
        $classes = mysqli_fetch_assoc($sql2);
        echo $classes['classes'];
    }
}
