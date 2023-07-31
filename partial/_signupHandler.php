<?php
// PAGE TO HANDLE SIGNUP 
    $error="false";
    if($SERVER["REQUEST"]="POST"){
        include '_dbconnect.php';
        $username=$_POST['username'];
        $user_email=$_POST['email'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dept=$_POST['dept'];
        $hackathon=$_POST['hackathon'];
        $pass=$_POST['password'];
        $pass2=$_POST['password2'];
        $mpin=$_POST['mpin'];
        $mpin2=$_POST['mpin2'];
        $term=$_POST['term'];
        $contact=$_POST['contact'];
        //UNIQUE MAIL

        $exist="SELECT * FROM `coordinator` WHERE email='$user_email';";
        $result=mysqli_query($conn,$exist);
        $numRows=mysqli_num_rows($result);
        if($numRows>0){
            $error="Email already in use";
            header("Location: /qwerty/index.php?signup=false&error=$error");
        }
        else{
            if($pass==$pass2 && $mpin==$mpin2){
                $sql="INSERT INTO `coordinator`( `username`, `password`, `mpin`, `fname`, `lname`, `dept`, `hackathon`, `term`, `email`, `contact`, `timestamp`, `role_id`) VALUES ('$username','$pass','$mpin','$fname','$lname','$dept','$hackathon','$term','$user_email','$contact',current_timestamp(),'1')";
                
                $result=mysqli_query($conn,$sql);
                if($result){
                    $alert=true;
                    header("Location:_redirect.php?signup=true");
                    exit();
                }
            }
            else{
                $error="Passwords do not match";
                header("Location:../index.php?signup=false&error=$error");
            }
        }


    }

?>