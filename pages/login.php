<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../static/style.css">
</head>

<body>
  <!-- NAVBAR -->
  <?php include '../components/_header.php'?>


    <div class="container">
        <h1 class="login-head">Login</h1>
        <hr>

          <!-- Form -->
        <form action="/main/qwerty/service/_loginHandle.php" method="post">
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
        <?php
    if (isset($_GET['login']) && $_GET['login'] === 'false' && isset($_GET['error'])) {
        echo "<script>alert('Error: " . $_GET['error'] . "');</script>";
    }
    ?>
        <hr>
    </div>
   

    <?php include '../components/_footer.php' ?>
    <script src="../static/script.js"></script>
</body>

</html>