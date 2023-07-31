<?php
// Page to handle Report submission

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include '_dbconnect.php';

    $g_id = $_POST["g_id"];
    $team_name = $_POST["team_name"];
    $project_title = $_POST["project_title"];
    $event = $_POST["event"];
    $year = $_POST["year"];
    $results = $_POST["results"];
    $m_id = $_POST["M_id"];
    $m_name = $_POST["M_name"];
    $m_PH_no = $_POST["M_PH_no"];
    $m_email = $_POST["M_email"];
    $sno = intval($_POST["sno"]);

    // Check if the mentor with the given m_id already exists in the mentor table
    $check_mentor_sql = "SELECT * FROM `mentor` WHERE m_id = ?";
    $stmt = $conn->prepare($check_mentor_sql);
    $stmt->bind_param("s", $m_id);
    $stmt->execute();
    $existing_mentor_result = $stmt->get_result();

    // If the mentor with the given m_id does not exist, insert mentor details
    if ($existing_mentor_result->num_rows === 0) {
        $stmt->close();

        // group sql
        $sql_group = "INSERT INTO `group` (g_id, team_name, no_of_members, project_title, m_id, hack_event, `year`, result) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_group = $conn->prepare($sql_group);
        $stmt_group->bind_param("ssisssss", $g_id, $team_name, $sno, $project_title, $m_id, $event, $year, $results);
        $result = $stmt_group->execute();
        $stmt_group->close();

        // Insert mentor details
        if ($result) {
            $sql_mentor = "INSERT INTO `mentor` (m_id, m_name, m_ph_no, m_email) 
                           VALUES (?, ?, ?, ?)";
            $stmt_mentor = $conn->prepare($sql_mentor);
            $stmt_mentor->bind_param("ssss", $m_id, $m_name, $m_PH_no, $m_email);
            $mentor_result = $stmt_mentor->execute();
            $stmt_mentor->close();

            if (!$mentor_result) {
                $error = "cannot insert mentor data: ";
                header("Location: /qwerty/pages/index.php?insertMentor=false&error=$error");
                exit();
            }
        } else {
            $error = "cannot insert group data: ";
            header("Location: /qwerty/pages/index.php?insertGroup=false&error=$error");
            exit();
        }
    }

    // Insert student details
    $students_data = array();
    for ($i = 0; $i < $sno; $i++) {
        $sid = $_POST["sid" . $i];
        $s_name = $_POST["s_name" . $i];
        $dept = $_POST["dept" . $i];
        $s_PH_no = $_POST["s_PH_no" . $i];
        $s_email = $_POST["s_email" . $i];

        // Store student data as an associative array in the main array
        $student_details = array(
            "s_id" => $sid,
            "g_id" => $g_id,
            "s_name" => $s_name,
            "dept" => $dept,
            "ph_no" => $s_PH_no,
            "s_email" => $s_email
        );

        // Add the student details array to the main array
        $students_data[] = $student_details;
    }

    $values = array();
    foreach ($students_data as $student) {
        $values[] = "('" . implode("', '", $student) . "')";
    }
    $sql = "INSERT INTO `student` (s_id, g_id, s_name, dept, s_ph_no, s_email) VALUES " . implode(", ", $values);

    if ($conn->query($sql) === TRUE) {
        header("Location:../components/_redirect.php?insert=true");
        exit();
    } else {
        $error = "cannot insert student data: ";
        header("Location: /qwerty/pages/index.php?insertStudent=false&error=$error");
    }
}
?>
