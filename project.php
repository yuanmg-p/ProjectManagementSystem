<!DOCTYPE html>
<html>
<head>
    <title>List of Subjects</title>
    <style>
        .subject-container {
            display: flex;
            flex-wrap: wrap;
        }
        .subject-box {
            width: 200px;
            height: 100px;
            background-color: lightblue;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            text-align: center;
            line-height: 100px;
            box-sizing: border-box;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
if(isset($_GET['subject'])) {
    $subject = $_GET['subject'];
    echo "<h1>Subject: $subject</h1>";
} else {
  //  echo "<h1>No subject selected</h1>";
}
?>


<h1>List of Projects</h1>

<div class="subject-container">
    <?php
    // Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "SAD3";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch subjects from database
    $sql = "SELECT * FROM project_subject_Tbl inner join project_Tbl on project_Tbl.project_ID=project_subject_Tbl.project_ID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<a href='ProjectCRUD.php?subject=" . urlencode($row["Project_Name"]) . "'><div class='subject-box'>" . $row["Project_Name"] . "</div></a>";  
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</div>

</body>
</html>