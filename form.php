
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Practice</title>
    <style>
     /* Base Page Styling */
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
  color: #f1f1f1;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Centering Container */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

/* Form Styling */
form {
  background-color: #2c2c2c;
  padding: 20px 30px;
  border-radius: 10px;
  max-width: 400px;
  width: 100%;
  box-sizing: border-box;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
}

h2 {
  color: #4fc3f7;
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin: 15px 0 5px;
  color: #ccc;
  font-weight: 500;
}

/* Input & Select Styling */
input[type="text"],
input[type="email"],
input[type="password"],
input[type="number"],
select {
  width: 100%;
  padding: 10px;
  background-color: #3a3a3a;
  border: 1px solid #555;
  border-radius: 6px;
  color: #f1f1f1;
  font-size: 14px;
  margin-bottom: 10px;
  box-sizing: border-box;
}

/* Submit Button */
input[type="submit"],
button {
  margin-top: 15px;
  width: 100%;
  padding: 10px;
  background-color: #4fc3f7;
  border: none;
  color: black;
  font-weight: bold;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover,
button:hover {
  background-color: #29b6f6;
}

    </style>
   
</head>
<body>
    <div class="container">
    <form action="#" method="POST"autocomplete="off">
        
    <h2>Sign In</h2>
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age">

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="password">password</label>
       <input type="password" name ="password" class="textfield"placeholder="password">
       <br>
       <br>
    
 <input type="submit" name="submit">
    </form>
    </div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "responsiveforms");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
$password = $_POST['password'];
    if ($name != "" && $email != "" && $age != "" && $gender != "") {
        $query = "INSERT INTO form (name, email, age, gender, password) 
                  VALUES ('$name', '$email', '$age', '$gender', '$password')"; // changed here

        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('Data inserted successfully');</script>";
        } else {
            echo 'ERROR: DATA NOT INSERTED - ' . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Please fill all the required fields');</script>";
    }
}

?>
