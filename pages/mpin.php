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
  <?php include '../components/_header.php'?>
    
    <?php
    // Only display the page content if $login is true
    if(isset($_SESSION['loggedin'])&&$_SESSION["loggedin"]=true){
    ?>
    <div class="container">
        <h1 class="login-head">Mpin</h1>
        <hr>

          <!-- Form -->
        <form action="../service/_mpin_handler.php" method="post">
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
    <?php include '../components/_footer.php' ?>
</body>

</html>