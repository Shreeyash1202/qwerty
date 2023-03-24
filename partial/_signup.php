<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="navbar">
        <div class="nav-logo">
            <h3>Data Hub</h3>
        </div>
        <div class="rightnav">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../report.php">Report</a></li>
                <li><a href="../info.php">Info</a></li>
                <li><a href="../about.php">About</a></li>
            </ul>
            <a class="login-btn" href="_login.php">Login</a>
        </div>
    </div>


<div class="container">
    <h1 class="signup-head">Signup </h1>
        <hr>
    <!-- SIGNUP FORM -->
        <form action ="/fg/partial/_signupHandler.php"  method="post">
            <div class="signup-form">
                <label for="username" >Username</label>
                <input type="username"  id="username" name="username" placeholder="Username" aria-describedby="emailHelp" required>
                <div id="emailHelp" ></div>
           
            
                <label for="email" >Email</label>
                <input type="email"  id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>
            
                <label for="password" >Password</label>
                <input type="password"  id="password" placeholder="Password"  name="password" required>
            
                <label for="password2" >Confirm Password</label>
                <input type="password"  id="password2"placeholder="Confirm Password"  name="password2" required>
            
            <button type="submit" class="subbtn">Submit</button>
            </div>
        </form>
        <hr>
    </div>

    </body>
</html>
    