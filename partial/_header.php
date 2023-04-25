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
    if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true&&$_SESSION['role']==0){
      echo'
      <a class="logout-btn" href="partial/_logout.php">Logout</a>
      ';
    }
      elseif(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true&&$_SESSION['role']==1){
        echo'
        <li><a href="report.php">Report</a></li>
        <a class="logout-btn" href="partial/_logout.php">Logout</a>
        ';
      }
      elseif(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true&&$_SESSION['role']==2){
      echo'
      <p class ="logintxt">Welcome '.$_SESSION['username'].'</p>
      <a class="logout-btn" href="partial/_logout.php">Logout</a>
      ';
     }
      else{
      echo'
      <a class="login-btn" href="partial/_login.php">Login</a>';
    }
    echo'
</div>
</div>
</div>';
?>
