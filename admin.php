<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        form {
            margin: 0;
        }
        select {
            padding: 8px;
        }
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SAD3";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $status = $_POST['status'];
    $id = $_POST['id'];

    // Prepare and bind statement
    $stmt = $conn->prepare("UPDATE tbl_user SET status=? WHERE tbl_user_id=?");
    $stmt->bind_param("si", $status, $id);

    // Set parameters and execute
    $stmt->execute();
    
    echo "Status updated successfully";
    $stmt->close();
}

// Fetch records from the database
$sql = "SELECT tbl_user_id, name, status,username FROM tbl_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Username</th><th>Status</th></tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["tbl_user_id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td><form method='post'><input type='hidden' name='id' value='".$row["tbl_user_id"]."'><select name='status'><option value='allowed'>Allowed</option><option value='not_allowed'>Not Allowed</option></select><input type='submit' value='Update'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>