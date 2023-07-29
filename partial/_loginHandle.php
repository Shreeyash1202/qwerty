<?php
// PAGE TO HANDLE THE LOGIN
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include '_dbconnect.php';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';

    if ($role === 'Coordinator') {
        $sql = "SELECT * FROM `coordinator` WHERE username='$username';";
    } else if ($role === 'HOD') {
        $sql = "SELECT * FROM `admin` WHERE username='$username';";
    } else if ($role === 'Guest') { // Add support for "Guest" login
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = 'Guest';
        $_SESSION['role'] = 0; // Role for "Guest" is 0
        $email=$_POST['email'];
        $sql="INSERT INTO `guest`( `guest_email`) VALUES ('$email')";
        $result = mysqli_query($conn, $sql);
        header("Location: /main/qwerty/index.php?login=true");
        exit; // Terminate script execution for "Guest" login
    } else {
        $error = 'Invalid role';
        header("Location: /main/qwerty/index.php?login=false&error=$error");
        exit; // Terminate script execution for other invalid roles
    }

    // Add check if $sql is set before executing the query
    if (isset($sql)&&$role!=0) {
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $numRows = mysqli_num_rows($result);

            if ($numRows == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($password === $row['password']) {
                    session_start();
                    $hackathon = $row['hackathon'];
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;

                    // Checking role
                    if ($role === 'Coordinator') {
                        $role = 1;
                        $_SESSION['hackathon'] = $hackathon;
                    } elseif ($role === 'HOD') {
                        $role = 2;
                    }

                    // Session role setting
                    $_SESSION['role'] = $role;
                    header("Location: /main/qwerty/index.php?login=true");
                    exit; // Terminate script execution for successful login
                } else {
                    $error = "Wrong Password";
                    header("Location: /main/qwerty/index.php?login=false&error=$error");
                    exit; // Terminate script execution for wrong password
                }
            } else {
                $error = 'Unable to login';
                header("Location: /main/qwerty/index.php?login=false&error=$error");
                exit; // Terminate script execution for invalid username
            }
        } else {
            $error = 'Database query error';
            header("Location: /main/qwerty/index.php?login=false&error=$error");
            exit; // Terminate script execution for database query error
        }
    } else {
        $error = 'Invalid role';
        header("Location: /main/qwerty/index.php?login=false&error=$error");
        exit; // Terminate script execution for other invalid roles
    }
}
?>
