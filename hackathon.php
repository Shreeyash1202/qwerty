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
    <?php include 'partial/_header.php'?>
    <?php include 'partial/_dbconnect.php'?>

    <!-- CRITERIA  -->



    <div class="info-criteria">
        <div class="container">
            <div class="info-head">
                <h1>Hackathon</h1>

            </div>
            <form>
                <label for="temname">TEAM NAME :</label><br>
                <input type="text" id="temname" name="fname"><br>
                <label for="falname">FACULTY NAME:</label><br>
                <input type="text" id="falname" name="fname"><br>
                <label for="yr">YEAR :</label><br>
                <select name="year" id="yr">
                    <option value="select">select year</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select><br>
                <button type="submit" class="subbtn">Submit</button>

            </form>

            <!-- <div class="info-head"> -->
            <hr>
            <ul>
                <p>DISCLAIMER:</p>
                <li>Select the event for which you wanna see data.</li>
                <li>A list can be seen below if data is available.</li>
                <li>If no results are seen, it is possible that no data is added of that event.</li>

            </ul>
            <hr>
        </div>
    </div>
    <?php include 'partial/_footer.php'?>
</body>

</html>