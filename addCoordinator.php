<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="static/style.css">
</head>
<body>
<?php include 'partial/_header.php'?>


<div class="container">
    <h1 class="signup-head">Add Coordinator </h1>
        <hr>
    <!-- SIGNUP FORM -->
        <form action ="/fg/partial/_signupHandler.php"  method="post">
            <div class="signup-form">
                <label for="username" >Username</label>
                <input type="username"  id="username" name="username" placeholder="Username" aria-describedby="emailHelp" required>
           
                <label for="email" >Email</label>
                <input type="email"  id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>

                
                <label for="f_name" >Full Name</label>
                <input type="f_name"  id="f_name" name="f_name" placeholder="f_name" required>
                
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
                <label for="event">Select The Event*</label><br>
                Hackathon

                    <input type="checkbox" id="checkbox1" name="checkbox1" value="Hackathon">
                    
                    <input type="checkbox" id="checkbox2" name="checkbox2" value="DeepBlue">
                    <label for="checkbox2">DeepBlue</label>

                    <input type="checkbox" id="checkbox3" name="checkbox3" value="Avishkar">
                    <label for="checkbox3">Avishkar</label><br>

                    <br><br>
                 <label for="term">Term*</label>
                 <input type="date" id="term" name="term" required>

                 <label for="Ph_no">Phone no:</label> 
                <input type="tel" id="Ph_no" name="Ph_no" required>



                <label for="password" >Password</label>
                <input type="password"  id="password" placeholder="Password"  name="password" required>
            
                <label for="password2" >Confirm Password</label>
                <input type="password"  id="password2"placeholder="Confirm Password"  name="password2" required>
            
            <button type="submit" class="subbtn">Submit</button>
            </div>
        </form>
        <hr>
    </div>

    </body>
</html>
    