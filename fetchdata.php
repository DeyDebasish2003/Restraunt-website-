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
    <title>Displaying Data</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #f1f1f1;
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #4fc3f7;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #444;
        }

        th {
            background-color: #333;
            color: #4fc3f7;
        }

        td {
            background-color: #2a2a2a;
        }

        .Update, .delete {
            background-color: #4fc3f7;
            color: black;
            border: none;
            padding: 5px 15px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .Update:hover {
            background-color: #29b6f6;
        }

        .delete {
            background-color: red;
            color: white;
        }

        .delete:hover {
            background-color: darkred;
        }

        .logout-button {
            display: block;
            margin: 30px auto 0;
            padding: 10px 30px;
            background-color: #f06292;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #ec407a;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION["email"]) ?> 👋</h1>

<?php
$query = "SELECT * FROM form";
$result = mysqli_query($conn, $query);
$rowCount = mysqli_num_rows($result);

if ($rowCount > 0) {
    echo "
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
    ";

    while ($rowData = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <td>" . htmlspecialchars($rowData['name']) . "</td>
            <td>" . htmlspecialchars($rowData['email']) . "</td>
            <td>" . htmlspecialchars($rowData['age']) . "</td>
            <td>********</td>
            <td>" . htmlspecialchars($rowData['gender']) . "</td>
            <td>
                <a href='update.php?name=" . urlencode($rowData['name']) . "&email=" . urlencode($rowData['email']) . "&age=" . urlencode($rowData['age']) . "&pass=" . urlencode($rowData['password']) . "&gen=" . urlencode($rowData['gender']) . "'>
                    <button class='Update'>Update</button>
                </a>
                <a href='delete.php?email=" . urlencode($rowData['email']) . "' onclick='return checkdel();'>
                    <button class='delete'>Delete</button>
                </a>
            </td>
        </tr>
        ";
    }

    echo "</tbody></table>";
} else {
    echo "<strong>Error:</strong> No data found from database.";
}
?>

<form action="logout.php" method="POST">
    <input type="submit" name="logout" value="Logout" class="logout-button">
</form>

<script>
    function checkdel() {
        return confirm('ARE YOU SURE YOU WANT TO DELETE THIS RECORD?');
    }
</script>
</body>
</html>
