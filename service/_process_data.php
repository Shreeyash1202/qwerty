<!-- process_data.php -->
<?php
include '_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $team_name = $_POST['team_name'];
    $faculty_id = $_POST['m_id'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];

    // Perform database query to fetch data based on the submitted form data
<<<<<<< HEAD
    $sql = "SELECT * FROM events WHERE team_name='$team_name' AND faculty_name='$faculty_id' AND year='$year' AND event='$event'AND gender='$gender'";
=======
    $sql = "SELECT * FROM events WHERE team_name='$team_name' AND faculty_name='$faculty_name' AND year='$year' AND event='$event'";
>>>>>>> 3773dd6a04f3e40c60efb98ea27f59c0ce44937e
    $result = mysqli_query($conn, $sql);

    // Check if data is available
    if (mysqli_num_rows($result) > 0) {
        // Loop through the rows and display the data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Team Name: " . $row['team_name'] . "<br>";
            echo "Faculty Name: " . $row['faculty_name'] . "<br>";
            echo "Year: " . $row['year'] . "<br>";
            echo "Gender: " . $row['gender'] . "<br>";
            // Display other data as needed
            echo "<hr>";
        }
    } else {
        echo "No data available for the selected criteria.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
