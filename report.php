<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <title>Report|Data's Guide</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php include 'partial/_header.php'?>
    <?php include 'partial/_dbconnect.php'?>

    <?php
    $alert=false;
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
            $fname=$_POST['first_name'];
            $lname=$_POST['surname'];
            $work=$_POST['work'];
            $event=$_POST['event'];
            $dept=$_POST['dept'];
            $level=$_POST['level;'];
            $govsub=$_POST['govsub'];
            $result=$_POST['results'];
            $sql="INSERT INTO `report`(`fname`, `lname`, `work`, `event`, `dept`, `level`, `govsub`, `results`) VALUES ('$fname`, `$lname`, `$work`, `$event`, `$dept`, `$level`, `$govsub`, `$result`)";
            $result=mysqli_query($conn,$sql);

            $alert=true;
            

            
        } ?>

    <div class="form-body">
        <?php 
       echo '
            
        <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
            <h1>REPORT</h1>';
            if($alert){
                echo '
                <div class="alert">
                <p id="alert">
                Response Recorded <button type="button"onclick="closealert()">X</button></p>
            </div>
                ';};


            if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]=true){
            echo '<hr>
            <div class="form-row">
                <div class="flexc">
                    <label for="form_name">Firstname *</label>
                    <input type="text" name="first_name" placeholder="Please enter your firstname *" required="required"
                        data-error="Firstname is required." />
                </div>
                <div class="flexc">

                    <label for="form_lastname">Lastname *</label>
                    <input type="text" name="surname" placeholder="Please enter your lastname *" required="required"
                        data-error="Lastname is required." />
                </div>
            </div>
            <div class="form-row">
                <div class="flexc">

                    <label for="form_need">Worked as*</label>
                    <select name="work" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Role--
                        </option>
                        <option>HOD</option>
                        <option>TEACHER</option>
                    </select>
                </div>
                <div class="flexc">
                    <label for="form_need">Event *</label>
                    <select name="state" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your EVENT--
                        </option>
                        <option>Avishkar</option>
                        <option>Deep Blue</option>
                        <option>Hackathon</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="flexc">
                    <label for="form_need">Select The Department*</label>
                    <select name="crop" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Department--
                        </option>
                        <option>CS</option>
                        <option>IT</option>
                        <option>EXTC</option>
                        <option>ECS</option>
                        <option>MECH</option>
                        <option>AUTOMOBILE</option>
                    </select>
                </div>
                <div class="flexc">


                    <label for="form_need">LEVEL*</label>
                    <select name="fertilizer" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Level--
                        </option>
                        <option>UG</option>
                        <option>PG</option>
                        <option>PHD</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="flexc">
                    <label for="form_need">RESULTS*</label>
                    <select name="crop_use" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Results--
                        </option>
                        <option>WINNERS Use</option>
                        <option>1ST RUNNER UP</option>
                        <option>2ST RUNNER UP</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="flexc">


                    <label for="form_need">Used Government Subsidy*</label>
                    <select name="gov_sub" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Answer--
                        </option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
            </div>  
            <button type="submit" class="subbtn">Submit</button>
        </form>';
        }
        else{
            echo '<hr><div class="notlogged">
            
            <h2>*PLEASE LOGIN TO REPORT YOUR DATA*</h2>
            <p>Login or signup in the Navigation bar</p>
            </div>';
        }
        ?>
        <div class="report-desc">
            <p>
                <hr>
                <br>
                <h3>NOTE:</h3>
                <br>
                <ul>
                    <li>Please Enter correct information.</li>
                    <li>If you are entering on someones behalf then please verify all the details.</li>
                    <li>Your data is valuable to us and also for anyone who is interested in it so please be honest.</li>
                    <li>By filling the form you accept all our terms and conditions.</li>
                </ul>
            </p>
        </div>
    </div>
    <?php include 'partial/_footer.php'?>

</body>

</html>