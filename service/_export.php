<?php
// Check if the export request is received
if (isset($_POST["export"]) && ($_POST["export"] == "1")) {
    // ... (existing PHP code for database connection and query) ...

    // Load TCPDF library
    require 'C:/Users/admin/Downloads/TCPDF-main.zip/TCPDF-main/tcpdf.php';

    // Create a new PDF document
    $pdf = new TCPDF();

    // Set document information (optional)
    $pdf->SetAuthor('Avishkar');
    $pdf->SetTitle('Search Results');
    $pdf->SetSubject('Avishkar Search Results');
    $pdf->SetKeywords('Avishkar, Search, Results');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('dejavusans', '', 12);

    // Generate PDF content
    $pdfContent = '<h1>Search Results</h1>';
    $pdfContent .= '<table border="1">
                    <tr>
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

    // Populate the data in the PDF table
    mysqli_data_seek($result, 0);
    while ($data = mysqli_fetch_assoc($result)) {
        $pdfContent .= '<tr>
                            <td>' . $data['g_id'] . '</td>
                            <td>' . $data['project_title'] . '</td>
                            <td>' . $data['year'] . '</td>
                            <td>' . $data['m_name'] . '</td>
                            <td>' . $data['m_email'] . '</td>
                            <td>' . $data['result'] . '</td>
                            <td>' . $data['s_name'] . '</td>
                            <td>' . $data['dept'] . '</td>
                            <td>' . $data['s_ph_no'] . '</td>
                            <td>' . $data['s_email'] . '</td>
                            <td>' . $data['gender'] . '</td>
                        </tr>';
    }

    $pdfContent .= '</table>';

    // Output the PDF content to the document
    $pdf->writeHTML($pdfContent, true, false, true, false, '');

    // Close and output the PDF
    $pdf->Output('search_results.pdf', 'D');

    // Stop further execution to avoid any unexpected output
    exit;
}
?>
