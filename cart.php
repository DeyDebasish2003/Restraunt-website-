<?php
session_start();
include("connection.php");

// Redirect to login if not logged in
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>


p{
            font-family: cursive;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1 {
            font-family: cursive;
            font-size: 50px;
            text-align: center;
            margin: 30px 0;
        }
        body {
            background-color: #faebd7;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>
    SELECT THE ITEMS TO ORDER ^^
    </h1>
    
</body>
</html>