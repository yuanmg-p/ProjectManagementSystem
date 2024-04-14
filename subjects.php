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

<h1>List of Subjects</h1>

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
    $sql = "SELECT * FROM subject_user_Tbl inner join subject_Tbl on subject_Tbl.subject_ID=subject_user_Tbl.subject_ID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<a href='project.php?subject=" . urlencode($row["subject_Name"]) . "'><div class='subject-box'>" . $row["subject_Name"] . "</div></a>";  
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</div>

</body>
</html>