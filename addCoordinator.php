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
   
    .success-message {
        color: green;
        margin-top: 10px;
    }

    .error-message {
        color: red;
        margin-top: 10px;
    }
</style>
<body>
<?php include 'partial/_header.php'?>


<div class="container">
    <h1 class="signup-head">Add Coordinator </h1>
        <hr>
    <!-- SIGNUP FORM -->
        <form action ="/main/qwerty/partial/_signupHandler.php"  method="post" >
            <div class="signup-form">
                <label for="username" >Username*</label>
                <input type="username"  id="username" name="username" placeholder="Username" aria-describedby="emailHelp" required>
           
                <label for="email" >Email*</label>
                <input type="email"  id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>

                
                <label for="fname" >First Name*</label>
                <input type="fname"  id="fname" name="fname" placeholder="fname" required>
               
                <label for="lname" >Last Name*</label>
                <input type="lname"  id="lname" name="lname" placeholder="lname" required>
                
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
<br><br>
                <label for="event">Select The Event*</label><br>
               
                <select name="hackathon" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select The Event--
                        </option>
                        <option> Hackathon</option>
                        <option>DeepBlue</option>
                        <option>Avishkar</option>
                    

                    <br><br>
                 <label for="term">Term*</label>
                 <input type="date" id="term" name="term" required>

                 <label for="contact">Phone no:*</label> 
                <input type="tel" id="contact" name="contact" required>



                <label for="password" >Password*</label>
                <input type="password"  id="password" placeholder="Password"  name="password" required>
            
                <label for="password2" >Confirm Password*</label>
                <input type="password"  id="password2"placeholder="Confirm Password"  name="password2" required>
            
                <label for="mpin" >Set mpin*</label>
                <input type="password"  id="mpin" placeholder="Mpin"  name="mpin" required>
            
                <label for="mpin2" >Confirm mpin</label>
                <input type="password"  id="mpin2"placeholder="Confirm Mpin"  name="mpin2" required>
            






            <button type="submit" class="subbtn">Submit</button>
            </div>
        </form>
        <hr>
    </div>

    </body>
</html>

    


