<!-- search.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results </title>
    <link rel="stylesheet" href="../static/style.css">
     <!-- ... Other meta tags and styles ... -->
 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.17/jspdf.plugin.autotable.min.js"></script>
   
   
    <style>
        .container {
            margin: auto;
        }
        canvas {
            display: block;
            margin: 20px auto;
        }
        @page {
            size: auto;
            margin: 0mm;
        }
    </style>
</head>

<body>
    <?php include '_header.php' ?>
    
    <div class="info-criteria">
   
        
        <div class="container">
           
       
            <?php
             include '../service/_dbconnect.php';
             
            // Check the connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Initialize variables to store search criteria
            $year = "";
            $g_id = "";
            $project_title = "";
          
            // Check if the "ratio" parameter is received
            $ratio = isset($_GET["ratio"]) ? $_GET["ratio"] : '';

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the search criteria from the form
                $year = $_POST["year"];
                $g_id = $_POST["g_id"];
                $project_title = $_POST["project_title"];
                $event = $_POST["event"];
                $gender = $_POST["gender"];

                // Initialize an array to store search conditions
                $conditions = array();

                // Build the SQL query based on the provided search criteria
                if (!empty($year)) {
                    $conditions[] = "g.year = '$year'";
                }
                if (!empty($g_id)) {
                    $conditions[] = "g.g_id = '$g_id'";
                }
                if (!empty($project_title)) {
                    $conditions[] = "g.project_title LIKE '%$project_title%'";
                }
                if (!empty($gender)) {
                    $conditions[] = "s.gender = '$gender'";
                }

                // Combine the conditions using AND
                $condition_str = implode(" AND ", $conditions);

                // Perform the SELECT query with the combined conditions
                $sql = "SELECT g.g_id, g.project_title, g.year, m.m_name, m.m_email, g.result,
                s.s_name, s.dept, s.s_ph_no, s.s_email, s.gender, s.a_year
                FROM `group` AS g
                JOIN `mentor` AS m ON g.M_id = m.M_id
                LEFT JOIN `student` AS s ON g.g_id = s.g_id
                WHERE $condition_str AND g.hack_event = '$event'
                ORDER BY g.g_id";
                
                // Execute the query
                $result = mysqli_query($conn, $sql);

                // Check if there are any rows returned
                if (mysqli_num_rows($result) > 0) {
                    echo '<h1>Search Results</h1>';
                    echo '<br><br>';
                    echo '<center><h4>Pillai College of Engineering</h4></center>';
                    echo '<br><br>';
                    echo '<table id="table">';
                    echo '<tr>
                            <th>Group ID</th>
                            <th>Project Title</th>
                            <th>Year</th>
                            <th>Mentor Name</th>
                            <th>Mentor Email</th>
                            <th>Result</th>
                            <th>Student Name</th>
                            <th>Department</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Gender</th>
                        </tr>';

                    $prev_group_id = null;

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($prev_group_id != $row["g_id"]) {
                            $prev_group_id = $row["g_id"];
                            $group_rowspan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `student` WHERE g_id = '{$row["g_id"]}'"));

                            echo '<tr>';
                            echo '<td rowspan="' . $group_rowspan . '">' . $row["g_id"] . '</td>';
                            echo '<td rowspan="' . $group_rowspan . '">' . $row["project_title"] . '</td>';
                            echo '<td rowspan="' . $group_rowspan . '">' . $row["year"] . '</td>';
                            echo '<td rowspan="' . $group_rowspan . '">' . $row["m_name"] . '</td>';
                            echo '<td rowspan="' . $group_rowspan . '">' . $row["m_email"] . '</td>';
                            echo '<td rowspan="' . $group_rowspan . '">' . $row["result"] . '</td>';
                            echo '<td>' . $row["s_name"] . '</td>';
                            echo '<td>' . $row["dept"] . '</td>';
                            echo '<td>' . $row["s_ph_no"] . '</td>';
                            echo '<td>' . $row["s_email"] . '</td>';
                            echo '<td>' . $row["gender"] . '</td>';
                            echo '</tr>';
                        } else {
                            echo '<tr>';
                            echo '<td>' . $row["s_name"] . '</td>';
                            echo '<td>' . $row["dept"] . '</td>';
                            echo '<td>' . $row["s_ph_no"] . '</td>';
                            echo '<td>' . $row["s_email"] . '</td>';
                            echo '<td>' . $row["gender"] . '</td>';
                            echo '</tr>';
                        }
                    }

                    echo '</table>';
                    

                } else {
                    echo "<p>No results found.</p>";
                }
            }
            
            
            ?>
            <div class="right">
           <button type="button" class="subbtn" onclick="goBack()">Back</button><br><br>
            </div>
           <button type="button" class="subbtn" onclick="exportToCSV()">Export to excel</button>
           <button type="button" class="subbtn" onclick="exportToPDF()">Export to PDF</button>
         
        </div>
    </div>
  
    <script>
                function goBack() {
                    window.history.back();
                    
                }   
                function downloadCSV(csv, filename) {
            const blob = new Blob([csv], { type: 'text/csv' });
            if (window.navigator.msSaveOrOpenBlob) {
                window.navigator.msSaveBlob(blob, filename);
            } else {
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            }
        }

        function exportToCSV() {
            const table = document.getElementById('table');
            const rows = table.querySelectorAll('tr');

            let csv = '';
            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].querySelectorAll('th, td');
                let rowData = [];
                for (let j = 0; j < cells.length; j++) {
                    rowData.push(cells[j].innerText);
                }
                csv += rowData.join(',') + '\n';
            }

            downloadCSV(csv, 'search_results.csv');
        }


        
        function exportToPDF() {
           
            window.print();
        }
        
        </script>
    
</body>

</html>
