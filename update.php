<?php 
session_start();
include("connection.php");
$email = $_GET['email'];
$query = "SELECT * FROM form WHERE email='$email'";
$result = mysqli_query($conn, $query);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    $rowData = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Form Practice</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #f1f1f1;
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        h2 {
            color: #4fc3f7;
        }

        form {
            background-color: #2c2c2c;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #ddd;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            background-color: #3a3a3a;
            border: 1px solid #555;
            color: #f1f1f1;
            border-radius: 5px;
        }

        button, input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background-color: #4fc3f7;
            border: none;
            color: black;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #29b6f6;
        }
    </style>
</head>
<body>
    <h2>Update Form</h2>
    <form action="#" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" value="<?php echo $rowData['name']; ?>" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" value="<?php echo $rowData['email']; ?>" id="email" name="email" required readonly>

        <label for="age">Age:</label>
        <input type="number" value="<?php echo $rowData['age']; ?>" id="age" name="age">

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male" <?php if ($rowData['gender'] == 'male') echo "selected"; ?>>Male</option>
            <option value="female" <?php if ($rowData['gender'] == 'female') echo "selected"; ?>>Female</option>
            <option value="other" <?php if ($rowData['gender'] == 'other') echo "selected"; ?>>Other</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" value="<?php echo $rowData['password']; ?>" id="password" name="password">

        <input type="submit" name="Update" value="Update">
    </form>
</body>
</html>

<?php
if (isset($_POST['Update'])) {
    $name = $_POST['name'];
    $email = $_POST['email']; // read-only, used for WHERE clause
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password']; // plain text (optional: hash it)

    if ($name != "" && $email != "" && $age != "" && $gender != "") {
        $query = "UPDATE form SET name='$name', age='$age', gender='$gender', password='$password' WHERE email='$email'";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>alert('DATA UPDATED SUCCESSFULLY');</script>";
            echo '<meta http-equiv="refresh" content="0; url=http://localhost/crud/fetchdata.php" />';
        } else {
            echo 'ERROR: DATA NOT UPDATED - ' . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Please fill all the required fields');</script>";
    }
}
?>
