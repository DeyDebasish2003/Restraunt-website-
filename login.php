<?php
session_start();
include("connection.php");

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM form WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $total = mysqli_num_rows($result);

    if ($total > 0) {
        $_SESSION["email"] = $email;
        header("Location: afterlogin.php");
        exit();
    } else {
        echo "<script>alert('Login failed. Invalid credentials.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <style>



    * { box-sizing: border-box; }
    body {
      
      background-color: antiquewhite;
  background-image: 
    linear-gradient(45deg, #d47d0bb5 25%, transparent 25%),
    linear-gradient(-45deg, #d32f2f 25%, transparent 25%),
    linear-gradient(45deg, transparent 75%, #d39a2fff 75%),
    linear-gradient(-45deg, transparent 75%, #d3582f97 75%);
  background-size: 40px 40px;
  background-position: 0 0, 0 20px, 20px -20px, -20px 0px;
      color: #f1f1f1;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      
    }
    .login-container {
      background-color: #2c2c2c;
      padding: 30px 25px;
      border-radius: 12px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    }
    h1 {
      text-align: center;
      color: #4fc3f7;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin: 15px 0 5px;
      color: #ccc;
      font-weight: 500;
    }
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      background-color: #3a3a3a;
      border: 1px solid #555;
      border-radius: 6px;
      color: #f1f1f1;
      font-size: 14px;
    }
    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #4fc3f7;
      border: none;
      color: #000;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
      background-color: #29b6f6;
    }
    .signup-link {
      margin-top: 15px;
      text-align: center;
      font-size: 14px;
    }
    .signup-link a {
      color: #4fc3f7;
      text-decoration: none;
    }
    .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
      
  <div class="login-container">
    
    <h1>Login</h1>
    <form action="" method="POST" autocomplete="off">
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required />

      <input type="submit" value="Login" name="login"/>
    </form>

    <div class="signup-link">
      New member? <a href="form.php">Sign up</a>
      
    </div>
  </div>
</body>
</html>
