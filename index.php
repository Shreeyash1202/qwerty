<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data hub</title>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/tp.css">
</head>



<!-- LINKED TABLE TO REPORT -->
<!-- WRITING ALERT IN HOME OPEN XAMPP AND SEE USERS AND TABLE -->
<!-- NOT INSERTED ANY DATA YET -->

<body>
    <div class="main">
        <!-- NAVBAR -->
        <?php include 'partial/_header.php'?>
        <?php include 'partial/_dbconnect.php'?>
    </div>
    <!-- HOME -->
    <div class="container">

   
    <div class="data">
        <img src="static/images/Screenshot 2023-02-06 003116.png" class="database">

    </div>
    <div class="text-container">
        <h1> Manage<br> Data Efficiently</h1>
        <p>One stop destination to view store and mange data of
            different techical events without having trouble
        </p>
        <a href="partial/_login.php">Login for more info</a>


    </div>
    </div>
    <div class="typeOfhackathon">
        <div class="data">
            <img src="static/images/Avishkar logo.jpg">

        </div>
        <div class="text-container">
            <h1> Avishkar</h1>
            <p>Institute is going to participate in Avishkar 2022 Competition. Avishkar is the State Level
                Inter-university
                Research Competition. An objective of this competition is to inculcate the research culture among the
                students and encourage them further to convert their ideas into physical reality.</p>

        </div>
    </div>

    <div class="typeOfhackathon">
        <div class="data">
            <img src="static/images/Hackathon logo.jpg">

        </div>
        <div class="text-container">
            <h1> Hackathon</h1>
            <p>Institute is going to participate in Avishkar 2022 Competition. Avishkar is the State Level
                Inter-university
                Research Competition. An objective of this competition is to inculcate the research culture among the
                students and encourage them further to convert their ideas into physical reality.</p>

        </div>
    </div>
    <div class="typeOfhackathon">
        <div class="data">
            <img src="static/images/deepblue logo.jpg">

        </div>
        <div class="text-container">
            <h1> Deeplue</h1>
            <p>Institute is going to participate in Avishkar 2022 Competition. Avishkar is the State Level
                Inter-university
                Research Competition. An objective of this competition is to inculcate the research culture among the
                students and encourage them further to convert their ideas into physical reality.</p>
             </div>
        </div>
        <!-- FOOTER -->
        <?php include 'partial/_footer.php' ?>

    </div>
    <script src="script.js"></script>






</body>

</html>