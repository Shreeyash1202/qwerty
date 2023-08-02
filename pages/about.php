<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About|Data hub</title>
    <link rel="stylesheet" href="../static/style.css">


</head>

<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
           
            color: #555;
            line-height: 1.6;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

       

        .container {
            text-align: center;
        }

        .image-wrapper {
            width: 30%;
            max-width: 300px;
            display: inline-block;
            margin-right: 20px;
            vertical-align: top;
        }

        .description {
            width: 70%;
            display: inline-block;
            text-align: justify;
        }

      

        @media (max-width: 768px) {
            .image-wrapper,
            .description {
                width: 100%;
                max-width: 100%;
                display: block;
            }
        }
    </style>
<!-- ABOUT THE WEBSITE -->

<body>
<div class="main">
<?php include '../components/_header.php'?>
</div><br><br>
    <h1>About Us</h1>
    <div class="container">
    <!-- Top Images -->
   
        <center>
            <img src="../static/images/about2.png" alt="Sample Image 4" width="550" height="350" >
            </center>

      
    

        <br><br>

    <!-- Introduction Paragraph -->
    <p>
        This website is a comprehensive platform that provides users with extensive information and insights into various events, including hackathons, DeepBlue, and Avishkar. Through this platform, users can access detailed data about each event, including specific details for different years, team members, individual student profiles, and mentor information. It offers a seamless browsing experience, allowing users to explore all aspects of these events, from their inception to the latest updates. Whether it's finding team compositions, learning about participants, or understanding the roles of mentors, this website serves as a valuable resource for anyone interested in these dynamic and impactful events.
    </p>
            <br><br><br>
    <!-- Section: Data -->
    <div class="image-wrapper">
        <img src="../static/images/data.png" alt="Sample Image 1" width="300" height="250">
    </div>
    <div class="description">
        <p>
            <strong>Data:</strong>
            The webpage ensures a rich and comprehensive experience by providing an extensive array of data for various events, including hackathons, DeepBlue, and Avishkar. Users can access detailed information, such as specific event details for different years, team member profiles, individual student achievements, and mentor profiles. The seamless organization and presentation of data empower users to delve into every facet of these dynamic events, fostering a deeper understanding of their impact and evolution over time.
        </p>
    </div>
    

    <br> <br>

    <!-- Section: Security -->
    <div class="image-wrapper">
        <img src="../static/images/securtiy.png" alt="Sample Image 2"width="300" height="250">
    </div>
    <div class="description">
        <p>
            <strong>Security:</strong>
            At the heart of our webpage lies a robust security framework, safeguarding user information and maintaining the confidentiality of sensitive data. Rigorous encryption protocols and the implementation of industry best practices ensure that all interactions and transactions on the platform are protected from unauthorized access and potential threats. Users can explore and navigate the webpage with peace of mind, knowing that their personal data and interactions are shielded with the highest level of security measures.
        </p>
    </div>
    

    <br><br>

    <!-- Section: Efficiency -->
    <div class="image-wrapper">
        <img src="../static/images/effencicy.png" alt="Sample Image 3"width="300" height="250">
    </div>
    <div class="description">
        <p>
            <strong>Efficiency:</strong>
            With a focus on efficiency, the webpage is designed to deliver an intuitive and user-friendly experience. Streamlined navigation, quick access to relevant information, and optimized loading times contribute to a seamless browsing journey for users. Whether searching for past winners, exploring competition locations and dates, or reviewing team compositions, users can easily and efficiently find the information they seek. The webpage's efficient design enhances user satisfaction and facilitates a smooth exploration of the captivating world of hackathons, DeepBlue, and Avishkar events.
        </p>
    </div>
   

    <br>
    <br>
    <!-- Thank You Message -->
    <div>
      <center>  <p>
            Thank you for visiting our website. We hope you find our content helpful and inspiring. If you have any questions or suggestions, feel free to reach out to us. Happy exploring!
        </p></center>
    </div>
    </div>
<!-- FOOTER -->
<?php include '../components/_footer.php' ?>
</body>

</html>


