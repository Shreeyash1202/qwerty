<?php
// Start the session (you should do this at the beginning of each PHP script that uses session variables)
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include '_dbconnect.php';

    $mpin = $_POST['mpin'];

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM `coordinator` WHERE username='$username';";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($mpin == $row['mpin']) {
            $_SESSION['loggedin'] = true;

            header("Location: ../report.php?login=true");
            exit();
        } else {
            $error = "Wrong Password";
            header("Location: ../mpin.php?login=false&error=$error");
            exit();
        }
    }
}
?>
