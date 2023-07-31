<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info|Database</title>
  <link rel="stylesheet" href="../static/style.css">
  <link rel="stylesheet" href="../static/omkar.css">
</head>


<body>
  <?php include '../components/_header.php' ?>
  <?php include '../service/_dbconnect.php' ?>
  <!-- CRITERIA  -->
  <div class="info">
    <div class="info-head">
      <h1>See All Events</h1>


    </div>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] = true) {
      echo '
        <div class="row">
        <div class="column">
          <div class="card">
              <h2>Hackathon</h2>
            <img width="180px" height="250px" src="../static/images/Hackathon logo.jpg" alt="hackathon" style="width:100%">
            <div class="butt-container">
         
              <p><a href="../pages/hackathon.php" class="button">More info</a></p>
            </div>
          </div>
        </div>
     
        <div class="column">
          <div class="card">
              <h2>Avishkar</h2>
            <img width="180px" height="250px" src="../static/images/Avishkar logo.jpg" alt="avishkar" style="width:100%">
            <div class="butt-container">
           
              <p><a href="../pages/avishkar.php" class="button">More info</a></p>
            </div>
          </div>
        </div>
       
        <div class="column">
          <div class="card">
              <h2>Deepblue</h2>
            <img width="180px" height="250px" src="../static/images/deepblue logo.jpg" alt="deepblue" style="width:100%">
            <div class="butt-container">
       
              <p><a href="../pages/deepblue.php" class="button">More info</a></p>
            </div>
          </div>
        </div>
      </div>      
     ';
    } else {
      echo '
        <div class="notlogged">
        <h2>*PLEASE LOGIN TO ACCESS THE REPORT*</h2>
            <p>Login or signup in the Navigation bar</p>
        </div>';
    }
    ?>
    <div class="info-head">
      <hr>
      <ul>
        <p>DISCLAIMER:</p>
        <li>Select the event for which you wanna see data.</li>
        <li>A list can be seen below if data is available.</li>
        <li>If no results are seen, it is possible that no data is added of that event.</li>


      </ul>
      <hr>
    </div>
  </div>
  <?php include 'partial/_footer.php' ?>
</body>


</html>