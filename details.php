<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/style.css">
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
    <?php include 'partial/_header.php' ?>


    <div class="container">
        <h1 class="signup-head">Group Details</h1>
        <hr>

        <div class="about-links">
            <a class="alinks active-link" onclick="openlink('group')">Group details</a>
            <a class="alinks active-link" onclick="openlink('mentor' )">Mentor details</a>
            <a class="alinks active-link" onclick="openlink('Student')">Student details</a>
        </div>

        <form action="S" method="post">
            <div>
                <div class="link-content active hidden" id="group">
                    <h4>Enter Group Details</h4>
                    <!-- SIGNUP FORM -->
                    <div class="signup-form">
                        <label for="g_id">Group ID*</label>
                        <input type="g_id" id="g_id" name="g_id" placeholder="Gruop_id" aria-describedby="emailHelp"
                            required>

                        <label for="team_name">Team Name*</label>
                        <input type="team_name" id="team_name" name="team_name" placeholder="Team_name"
                            aria-describedby="emailHelp" required>
                        <br>
                        <label for="event">Select The Event*</label><br>
                        <select name="event" type="text" required="required" data-error="Please specify your need.">
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
                            <option value="select">select year</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select><br><br>

                        <label for="results">Results :</label><br>
                        <input type="results" id="results" name="results" placeholder="results" required>
                    </div>
                </div>
                <div class="link-content hidden" id="mentor">
                    <h4>Enter Mentor Details</h4>
                    <div class="signup-form">
                        <label for="M_id">Mentor ID*</label>
                        <input type="M_id" id="M_id" name="M_id" placeholder="M_id" aria-describedby="emailHelp"
                            required>

                        <label for="M_name">Mentor Name*</label>
                        <input type="M_name" id="M_name" name="M_name" placeholder="M_name" aria-describedby="emailHelp"
                            required>
                        <br>
                        <label for="M_PH_no">Mentor Mobile number*</label>
                        <input type="M_PH_no" id="M_PH_no" name="M_PH_no" placeholder="M_PH_no"
                            aria-describedby="emailHelp" required>
                        <br>
                        <label for="M_email">Mentor Email id*</label>
                        <input type="M_email" id="M_email" name="M_email" placeholder="M_email"
                            aria-describedby="emailHelp" required>
                        <br>
                    </div>
                </div>
                <div class="link-content hidden" id="Student">

                    <div class="signup-form">
                        <h4>Enter Student Details Details</h4>
                        <label for="sno">Enter total no of group members *</label>
                        <input type="sno" id="sno" name="sno" placeholder="sno" aria-describedby="emailHelp" required>



                        <label for="M_id">Student ID*</label>
                        <h4>Enter student Details</h4>
                        <input type="M_id" id="M_id" name="M_id" placeholder="M_id" aria-describedby="emailHelp"
                            required>

                        <label for="s_name">Student Name*</label>
                        <input type="s_name" id="s_name" name="s_name" placeholder="s_name" aria-describedby="emailHelp"
                            required>
                        <br>
                        <label for="dept">Select The Department*</label> <br>
                        <select name="dept" type="text" required="required" data-error="Please specify your need.">
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
                        <br>
                        <label for="S_PH_no">Student Mobile number*</label>
                        <input type="S_PH_no" id="S_PH_no" name="S_PH_no" placeholder="S_PH_no"
                            aria-describedby="emailHelp" required>
                        <br>
                        <label for="S_email">Student Email id*</label>
                        <input type="S_email" id="S_email" name="S_email" placeholder="S_email"
                            aria-describedby="emailHelp" required>
                        <br>
                        <button type="submit" class="subbtn">Submit</button>
                    </div>
                </div>
            </div>
    </div>
    </div>


    </div>
    </form>
    <hr>
    </div>


    <script src="script.js"></script>
</body>

</html>