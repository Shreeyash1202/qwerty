<?php
// PAGE TO HANDLE THE LOGIN
if ($SERVER["REQUEST"] = "POST") {
    include '_dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    

    // If selected role is coordinator
    if ($role == 'Coordinator') {
        $sql = "SELECT * FROM `coordinator` WHERE username='$username';";
    }else if($role == 'HOD'){
        $sql = "SELECT * FROM `admin` WHERE username='$username';";
    }
        $result = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result);

        if ($numRows == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password == $row['password']) {
                session_start();
                $hackathon=$row['hackathon'];
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                // Checking role
                if ($role == 'Guest') {
                    $role = 0;
                } elseif ($role == 'Coordinator') {
                    $role = 1;
                    $_SESSION['hackathon'] = $hackathon;   
                } elseif ($role == 'HOD') {
                    $role = 2;
                }

                // Session role setting
                $_SESSION['role'] = $role;
                header("Location: /main/qwerty/index.php?login=true");
            } else {
                $error = "Wrong Password";
                header("Location: /main/qwerty/index.php?login=false&error=$error");
            }
        } else {
            $error = 'Unable to login';
            header("Location: /main/qwerty/index.php?login=false&error=$error");
        }
    }
?>