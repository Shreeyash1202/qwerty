<?php
// PAGE TO HANDLE THE LOGIN
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include '_dbconnect.php';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';

    // Check if the user selected the "Guest" role
    if ($role === 'Guest') {
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        // Check if the email contains ".mes.ac.in"
        if (strpos($email, 'mes.ac.in') !== false) {
            // Include session_start() at the beginning to start the session
            session_start();

            // Set session variables for "Guest" login
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = 'Guest';
            $_SESSION['role'] = 0; // Role for "Guest" is 0

            // Insert the guest email into the database
            $sql = "INSERT INTO `guest`( `guest_email`) VALUES ('$email')";
            $result = mysqli_query($conn, $sql);

            // Redirect to the main page with a successful login message
            header("Location: /main/qwerty/index.php?login=true");
            exit; // Terminate script execution for "Guest" login
        } else {
            // Redirect to the main page with an error message for invalid email domain
           
            header("Location:_login.php?login=false&error= Only emails with mes domain are allowed for Guest login.");
            exit; // Terminate script execution for invalid email domain
        }
    } else if ($role === 'Coordinator') {
        // Handle Coordinator login
        $sql = "SELECT * FROM `coordinator` WHERE username='$username';";
    } else if ($role === 'HOD') {
        // Handle HOD login
        $sql = "SELECT * FROM `admin` WHERE username='$username';";
    } else {
        // Handle invalid role selection
        $error = 'Invalid role';
        header("Location: /main/qwerty/index.php?login=false&error=$error");
        exit; // Terminate script execution for other invalid roles
    }

    // Add check if $sql is set before executing the query
    if (isset($sql) && $role != 0) {
        // Execute the database query
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $numRows = mysqli_num_rows($result);

            if ($numRows == 1) {
                $row = mysqli_fetch_assoc($result);

                // Check if the entered password matches the password in the database
                if ($password === $row['password']) {
                    // Start the session
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

                    // Redirect to the main page with a successful login message
                    header("Location: /main/qwerty/index.php?login=true");
                    exit; // Terminate script execution for successful login
                } else {
                    // Redirect to the main page with an error message for wrong password
                    $error = "Wrong Password";
                    header("Location: /main/qwerty/index.php?login=false&error=$error");
                    exit; // Terminate script execution for wrong password
                }
            } else {
                // Redirect to the main page with an error message for invalid username
                $error = 'Unable to login';
                header("Location: /main/qwerty/index.php?login=false&error=$error");
                exit; // Terminate script execution for invalid username
            }
        } else {
            // Redirect to the main page with an error message for database query error
            $error = 'Database query error';
            header("Location: /main/qwerty/index.php?login=false&error=$error");
            exit; // Terminate script execution for database query error
        }
    } else {
        // Redirect to the main page with an error message for other invalid roles
        $error = 'Invalid role';
        header("Location: /main/qwerty/index.php?login=false&error=$error");
        exit; // Terminate script execution for other invalid roles
    }
}

?>
