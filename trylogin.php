<?php
session_start();

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
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind statement
    $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username=? AND password=? AND status='allowed'");
    $stmt->bind_param("ss", $username, $password);

    // Set parameters and execute
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $_SESSION['username'] = $username;
        header("Location: main_menu.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password or login not allowed.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>