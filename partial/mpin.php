<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mpin</title>
    <link rel="stylesheet" href="../static/style.css">
</head>

<body>
  <!-- NAVBAR -->
    <div class="navbar">
        <div class="nav-logo">
            <h3>Data Hub</h3>
        </div>
        <div class="rightnav">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../info.php">Info</a></li>
                <li><a href="../about.php">About</a></li>
            </ul>
        </div>
    </div>
    
    <?php
    session_start();
    // Only display the page content if $login is true
    if(isset($_SESSION['loggedin'])&&$_SESSION["loggedin"]=true){
    ?>
    <div class="container">
        <h1 class="login-head">Mpin</h1>
        <hr>

          <!-- Form -->
        <form action="_mpin_handler.php" method="post">
            <div class="login-form">
        
                
                <label for="password">Enter your Mpin :</label>
                <input type="password"  placeholder="mpin" id="mpin" name="mpin" required>

              
                <button type="submit" class="subbtn">Submit</button>
            </div>
        </form>
        <hr>
    </div>
    <?php
    } else {
         echo'
        <div class="notlogged">
        <h2>*Access Denied *</h2>
           <p>Please login <p> 
        </div>';
    }
    ?>
    <?php include '_footer.php';?>
</body>

</html>