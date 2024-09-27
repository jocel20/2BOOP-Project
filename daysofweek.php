<!DOCTYPE html>
<html>
<head>
    <title>Day Buttons</title>
    <style>
        body {
            font-family: Arial Black, sans-serif;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 100px;
            color: #333;
        }

        form {
            margin-top: 50px;
        }

        button {
            padding: 15px 20px;
            font-size: 17px;
            color: white;
            background-color: Violet ;
            border: none;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <button name="monday">Monday</button>
        <button name="tuesday">Tuesday</button>
        <button name="wednesday">Wednesday</button>
        <button name="thursday">Thursday</button>
        <button name="friday">Friday</button>
        
    </form>
</body>
</html>

<?php
    if(isset($_POST['monday'])){
        echo"Monday";
    }
    if(isset($_POST['tuesday'])){
        echo"Tuesday";
    }
    if(isset($_POST['wednesday'])){
        echo" Wednesday";
    }
    if(isset($_POST['thursday'])){
        echo"Thursday";
    }
    if(isset($_POST['friday'])){
        echo "Friday";
    }
    
?>