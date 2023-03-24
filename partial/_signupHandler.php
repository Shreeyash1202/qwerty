<?php
// PAGE TO HANDLE SIGNUP 
    $error="false";
    if($SERVER["REQUEST"]="POST"){
        include '_dbconnect.php';
        $username=$_POST['username'];
        $user_email=$_POST['email'];
        $pass=$_POST['password'];
        $pass2=$_POST['password2'];

        //UNIQUE MAIL

        $exist="SELECT * FROM `users` WHERE user_email='$user_email';";
        $result=mysqli_query($conn,$exist);
        $numRows=mysqli_num_rows($result);
        if($numRows>0){
            $error="Email already in use";
            header("Location: /fg/index.php?signup=false&error=$error");
        }
        else{
            if($pass==$pass2){
                $sql="INSERT INTO `users` (`username`, `user_email`, `user_pass`, `timestamp`) VALUES ('$username', '$user_email', '$pass', current_timestamp());";
                $result=mysqli_query($conn,$sql);
                if($result){
                    $alert=true;
                    header("Location: /fg/index.php?signup=true");
                    exit();
                }
            }
            else{
                $error="Passwords do not match";
                header("Location: /fg/index.php?signup=false&error=$error");
            }
        }


    }

?>