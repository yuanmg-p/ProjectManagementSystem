<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SAD3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$subject_name = $_POST['subject_name'];
$subject_desc = $_POST['subject_desc'];


// SQL to insert data
$sql = "INSERT INTO Project_Tbl (Project_name,Project_desc) VALUES ('$subject_name','$subject_desc')";

// Perform query
if ($conn->query($sql) === TRUE) {
    // Redirect to a new page
    header("Location: ProjectCRUD.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>