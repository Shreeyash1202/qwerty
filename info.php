<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info|Database</title>
    <link rel="stylesheet" href="static/style.css">
    <link rel="stylesheet" href="static/omkar.css">
</head>

<body>
    <?php include 'partial/_header.php'?>
    <?php include 'partial/_dbconnect.php'?>

    <!-- CRITERIA  -->
    <div class="info">
        <div class="info-head">
            <h1>See All Events</h1>

        </div>
        <?php
        if(isset($_SESSION['loggedin'])&&$_SESSION["loggedin"]=true){
        echo '
        <div class="row">
        <div class="column">
          <div class="card">
              <h2>Hackathon</h2>
            <img width="180px" height="250px" src="static/Hackathon logo.jpg" alt="hackathon" style="width:100%">
            <div class="butt-container">
          
              <p><a href="hackathon.php" class="button">More info</a></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
              <h2>Avishkar</h2>
            <img width="180px" height="250px" src="static/Avishkar logo.jpg" alt="avishkar" style="width:100%">
            <div class="butt-container">
            
              <p><a href="avishkar.php" class="button">More info</a></p> 
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
              <h2>Deepblue</h2>
            <img width="180px" height="250px" src="static/deepblue logo.jpg" alt="deepblue" style="width:100%">
            <div class="butt-container">
        
              <p><a href="deepblue.php" class="button">More info</a></p>
            </div>
          </div>
        </div>
      </div>      
     ';
    }else{
        echo'
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
        <!-- PHP FOR DISPLAYING RESULT -->
        <?php
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
            $state=$_POST['level'];
            $sql="SELECT * FROM `report` WHERE state='$level'";
            $result=mysqli_query($conn,$sql);
            $once=true;

            $noResult=true;

            while($row=mysqli_fetch_assoc($result)){
                $noResult=false;
                if($once){
                    echo'<div class="result">
                <hr>
                <h2 class="info-h2">RESULT</h2>
                <hr>
                <br>
                <table>
                <tbody>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Worked as</th>
                        <th>Events</th>
                        <th>Department</th>
                        <th>LEVEL</th>
                        <th>Gov Subsidy</th>
                        <th>RESULTS</th>
                    </tr>';
                    $once=false;
                }
            $fname=$row['fname'];
            $lname=$row['lname'];
            $work=$row['work'];
            $event=$row['events'];
            $dept=$row['dept'];
            $level=$row['level'];
            $govsub=$row['subsidy'];
            $result=$row['result'];
            echo '
            <tr>
                    <td>'.$fname.'</td>
                    <td>'.$lname.'</td>
                    <td>'.$work.'</td>
                    <td>'.$event.'</td>
                    <td>'.$dept.'</td>
                    <td>'.$level.'</td>
                    <td>'.$govsub.'</td>
                    <td>'.$result.'</td>
                </tr>'

            ;
            }
            if($noResult){
                echo '<hr> <h2 class="info-h2">  Noo Results found </h2>';
            }else{
                echo'</tbody>
                </table>
            </div>';
            }
        } ?>
    </div>
    <?php include 'partial/_footer.php'?>
</body>

</html>
