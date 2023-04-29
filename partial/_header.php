<?php
session_start();
echo '
<div>
<div class="navbar">
<div class="nav-logo">
  <h3>Data hub</h3>
</div>
  <div class="rightnav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="info.php">Info</a></li>
      <li><a href="about.php">About</a></li>
    </ul>';

    // Guest
    if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true&&$_SESSION['role']==0){
      echo'
      ';
    }
    // Coordinator
      elseif(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true&&$_SESSION['role']==1){
        echo'
        <ul>
        <li><a href="report.php">Report</a></li>
        </ul>
        ';
      }
      // Admin HOD
      elseif(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true&&$_SESSION['role']==2){
      echo'
      <ul>
      <li><a href="addCoordinator.php">Add coordinator</a></li>
      </ul>
      '
      // Option to add coordinator
      ;
     }
      else{
      echo'
      <a class="login-btn" href="partial/_login.php">Login</a>';
    }

    // If logged in show name
    if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true){
      echo'
      <p class ="logintxt">Welcome '.$_SESSION['username'].'</p>
      <a class="logout-btn" href="partial/_logout.php">Logout</a>
      ';
    }

    echo'
</div>
</div>
</div>';
?>
