<!-- info.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info|Database</title>
    <link rel="stylesheet" href="../static/style.css">
    <style>
        .container {
            margin: auto;
        }
    </style>
</head>


<body>
<?php include '../components/_header.php'?>
    <div class="info-criteria">
        <div class="container">
            <div class="info-head">
                <h1>Hackathon</h1>
            </div>

            <!-- Display the search form -->
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
                echo '
                <form method="post" action="../components/exel.php"> <!-- The form action points to search.php -->
                    <label for="year">Year:</label>
                    <select name="year" id="yr">
                        <option value="">Select Year</option>
                        <option value="2018">2018-19</option>
                        <option value="2019">2019-20</option>
                        <option value="2020">2020-21</option>
                        <option value="2021">2021-22</option>
                        <option value="2022">2022-23</option>
                        <option value="2023">2023-24</option>
                    </select>

                    <label for="g_id">Group ID:</label>
                    <input type="text" name="g_id" id="g_id" placeholder="Enter group ID eg. 2023E124">

                    <label for="project_title">Project Title:</label>
                    <input type="text" name="project_title" id="project_title" placeholder="Enter Project Title">
                    <label for="gender">Select gender:</label>
                    <select name="gender" id="gender">
                    <option value="">--Select Gender--</option>
                        <option value="Female">Female</option>
                        <option value="male">Male</option>
                        <!-- Add more options for different events -->
                    </select>
                    <label for="event">Select Event:</label>
                    <select name="event" id="event">
                        <option value="Hackathon">Hackathon</option>
                        <!-- Add more options for different events -->
                    </select>

                    <button type="submit" class="subbtn">Search</button>
                </form>';
            } else {
                echo '<h1>Log in to access the info</h1>';
            }
            ?>
        </div>
    </div>
    <?php include '../components/_footer.php' ?>
</body>

</html>

