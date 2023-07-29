<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info|Database</title>
    <link rel="stylesheet" href="static/style.css">
    <style>
        .container {
            margin: auto;
        }
    </style>
</head>


<body>
    <?php include 'partial/_header.php' ?>
    <div class="info-criteria">
        <div class="container">
            <div class="info-head">
                <h1>deepblue</h1>
            </div>


            <?php
            // Establish database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hack";


            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);


            // Check the connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


            // Initialize variables to store search criteria
            $year = "";
            $g_id = "";
            $project_title = "";
            $event = "deepblue"; // Default event value


            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the search criteria from the form
                $year = $_POST["year"];
                $g_id = $_POST["g_id"];
                $project_title = $_POST["project_title"];
                $event = $_POST["event"];


                // Perform the SELECT query with the user's input as the conditions
                $sql = "SELECT * FROM `group` AS g
                        JOIN `mentor` AS m ON g.M_id = m.M_id
                        JOIN `student` AS s ON g.g_id = s.g_id
                        WHERE g.year = '$year' AND g.g_id = '$g_id' AND g.project_title LIKE '%$project_title%'
                        AND g.hack_event = '$event'";


                // Execute the query
                $result = mysqli_query($conn, $sql);


                // Check if there are any rows returned
                if (mysqli_num_rows($result) > 0) {
                    // Initialize an array to keep track of displayed group IDs
                    $displayedGroupIds = array();


                    echo "<h1>Search Results</h1>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Check if the current group ID has already been displayed
                        if (!in_array($row["g_id"], $displayedGroupIds)) {
                            // Display the required information from each table for the group
                            echo "<p>Group ID: " . $row["g_id"] . "</p>";
                            echo "<p>Project Title: " . $row["project_title"] . "</p>";
                            echo "<p>Year: " . $row["year"] . "</p>";
                            echo "<p>Mentor Name: " . $row["m_name"] . "</p>";
                            echo "<p>Mentor Email: " . $row["m_email"] . "</p>";
                            echo "<p>Result: " . $row["result"] . "</p>";
                            echo "<br>";
                            // Add the current group ID to the displayedGroupIds array
                            $displayedGroupIds[] = $row["g_id"];
                        }


                        // Display student information for each group (no need to check for duplicates here)
                        echo "<br>";
                        echo "<p>Student Name: " . $row["s_name"] . "</p>";
                        echo "<p>Department: " . $row["dept"] . "</p>";
                        echo "<p>Phone Number: " . $row["s_ph_no"] . "</p>";
                        echo "<p>Email: " . $row["s_email"] . "</p>";
                        echo "<br>";
                        echo "<hr>"; // A horizontal line to separate records, you can modify this as needed
                        echo "<br>";
                    }
                } else {
                    echo "<p>No results found.</p>";
                }
            }
            ?>


<?php
            if(isset($_SESSION['loggedin'])&&$_SESSION["loggedin"]==true){
             echo'
            <!-- Search form -->
            <form method="post">
                <label for="year">Year:</label>
                <select name="year" id="yr">
                    <option value="select">Select Year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
                <label for="g_id">Group ID:</label>
                <input type="text" name="g_id" id="g_id" >
                <label for="project_title">Project Title:</label>
                <input type="text" name="project_title" id="project_title" ]>
                <br>


                <!-- Dropdown menu for event selection -->
                <label for="event">Select Event:</label>
                <select name="event" id="event">
                    <option value="deepblue">deepblue</option>
                    <!-- Add more options for different events -->
                </select>
                <br>


                <button type="submit" class="subbtn">Search</button>
            </form>';
                } else{
                    echo '<h1>Log in to access the info</h1>';
                }
            ?>
        </div>
    </div>
   
</body>


</html>



