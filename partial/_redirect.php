<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Record Inserted Successfully</title>
    <link rel="stylesheet" href="../static/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
         
        }
        .success-message {
            font-size: 24px;
            color:  #21056f;
            margin-bottom: 20px;
        }
        .add-data-button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #21056f;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>

        <img src="tick.gif">
    <div class="success-message">
        
        Your record has been successfully inserted!
    </div>
    <button class="add-data-button" onclick=" goBack()">Add More Data</button>
    
    <script>
                function goBack() {
                    window.history.back();
                }
            </script>
     
</body>
</html>
