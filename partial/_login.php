<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    <div class="container">
        <h1 class="login-head">Login</h1>
        <hr>

          <!-- Form -->
        <form action="/main/qwerty/partial/_loginHandle.php" method="post">
            <div class="login-form">

            <label for="role">Enter your Role</label>
                    <select name="role" type="text" required="required" data-error="Please specify your need." id="role">
                        <option value="" selected disabled>
                            --Select Your Answer--
                        </option>
                        <option >Guest</option>
                        <option >Coordinator</option>
                        <option >HOD</option>
                    </select>
                    <div id="userDetails">
                    
                    </div>
                
                <button type="submit" class="subbtn">Submit</button>
            </div>
        </form>
        <hr>
    </div>


    <?php include '_footer.php';?>
    <script src="../static/script.js"></script>
</body>

</html>