<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../static/style.css">
</head>
<style>
    .about-container {
        display: flex;
    }

    .about-links {
        margin-top: 30px;
    }


    .about-links .active-link {
        text-decoration: underline;
        text-underline-offset: 5px;
    }

    .about-links a {
        text-decoration: none;
        color: blue;
        font-weight: bold;
        margin: 0px 10px;
        transition: 0.5s;
    }

    .about-links a:hover {
        color: red;
        cursor: pointer;
    }

    .link-content {
        margin-top: 20px;
        display: none;
    }

    .link-content.active {
        display: block;
    }

    .about-text {
        min-width: min-content;
        padding: 40px;
        color: #fff;
        font-size: 18px;
        text-align: justify;
    }

    .about-head {
        text-transform: uppercase;
        text-align: center;
        font-weight: bolder;
        font-size: 30px;
        color: #fff;
        margin: 30px 0px;
        margin-bottom: 80px;
    }
</style>

<body>
   <?php include '../components/_header.php'?>
   <?php
    // Only display the page content if $login is true
    if(isset($_SESSION['loggedin'])&&$_SESSION["loggedin"]=true){
    ?>

 
   

    <div class="container">
        <h1 class="signup-head">Group Details</h1>
        <hr>

        <div class="about-links">
            <a class="alinks active-link" onclick="openlink('group')">Group details</a>
            <a class="alinks active-link" onclick="openlink('mentor' )">Mentor details</a>
            <a class="alinks active-link" onclick="openlink('Student')">Student details</a>
        </div>
        
        <form action="/main/qwerty/service/_reportHandler.php"  method="post" id="groupForm">
      <div>
                <div class="link-content active hidden"  id="group">
                    <h4>Enter Group Details</h4>
                    <!-- SIGNUP FORM -->
                    <div class="signup-form">
                        <label for="g_id">Group ID*</label>
                        <input type="g_id" id="g_id" name="g_id" placeholder="Group ID starts with event year eg. 20223E124" aria-describedby="emailHelp"
                            required>

                        <label for="team_name">Team Name*</label>
                        <input type="team_name" id="team_name" name="team_name" placeholder="Team name"
                            aria-describedby="emailHelp" required>
                        <br>

                        <label for="project_title">Project Name*</label>
                        <input type="project_title" id="project_title" name="project_title" placeholder="Title of your Project"
                            aria-describedby="emailHelp" required>
                        <br>

                        <label for="event">Select The Event*</label><br>
                        <select name="event" type="text" required="required" data-error="Please Select your event">
                            <option value="" selected disabled>
                                --Select Your Event--
                            </option>
                           
                       
                            <?php
                            if ($_SESSION['hackathon'] == "Avishkar") {
                                echo '
                            <option>Avishkar</option>';
                            } else if ($_SESSION['hackathon'] == "Hackathon") {
                                echo '
                            <option>Hackathon</option>';
                            } else if ($_SESSION['hackathon'] == "Deepblue") {
                                echo '
                            <option>DeepBlue</option>';
                            }
                            ?>

                        </select>

                        <br><br>
                        <label for="year">Year :</label><br>
                        <select name="year" id="yr">
                            <option value="select">--Select Year--</option>
<<<<<<< HEAD
                            <option value="2018">2018-19</option>
                            <option value="2019">2019-20</option>
                            <option value="2020">2020-21</option>
                            <option value="2021">2021-22</option>
                            <option value="2022">2022-23</option>
                            <option value="2023">2023-24</option>
=======
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
>>>>>>> 3773dd6a04f3e40c60efb98ea27f59c0ce44937e
                        </select><br><br>

                        <label for="results">Results :</label><br>
                        <input type="results" id="results" name="results" placeholder="Enter the result eg. Winner, 2nd" required>
                        <button type="button" onclick="openlink('mentor')" class="subbtn">Next</button>
                    </div>
                </div>
            

                <!-- MENTOR DETAILS -->
                <div class="link-content hidden" id="mentor">
                    <h4>Enter Mentor Details</h4>
                    <div class="signup-form">
                        <label for="M_id">Mentor ID*</label>
                        <input type="M_id" id="M_id" name="M_id" placeholder="Mentor ID eg. 2021PE0275" aria-describedby="emailHelp"
                            required>

                        <label for="M_name">Mentor Name*</label>
                        <input type="M_name" id="M_name" name="M_name" placeholder="Full name of Mentor" aria-describedby="emailHelp"
                            required>
                        <br>
                        <label for="M_PH_no">Mentor Mobile number*</label>
                        <input type="M_PH_no" id="M_PH_no" pattern="^[0-9]{10,}$" name="M_PH_no" placeholder="Mentor Mobile number"
                            aria-describedby="emailHelp" required>
                        <br>
                        <label for="M_email">Mentor Email id*</label>
                        <input type="M_email" id="M_email" name="M_email" placeholder="Mentor Email id"
                            aria-describedby="emailHelp" required>
                        <br>
                        <button type="button" onclick="openlink('Student')" class="subbtn">Next</button>
                    </div>
                </div>

                <!-- STUDENT DETAILS -->
                <div class="link-content hidden" id="Student">

                    <h4>Enter Student Details</h4>
                    <div class="signup-form">
                        <label for="sno">Enter total no of group members *</label>
                        <select name="sno" id="sno" required>
                            <option value="">--Select number of students--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select><br><br>
                        <div class="addStudents">

                        </div>
                        <button type="submit" class="subbtn" >Submit</button>
                        <p style="text-align:center">If form  doesn't Submit please check if all fields are entered properly</p>
                    </div>
                </div>
            </div>
    </div>
    </div>


    </div>
    </form>

    <hr>
    </div>


    <script src="../script.js"></script>
    <?php
    } else {
         echo'
        <div class="notlogged">
        <h2>*Access Denied *</h2>
           <p>Please login <p> 
        </div>';
    }
    ?>
</body>

</html>