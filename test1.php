<!DOCTYPE html>
<html>
<head>
    <title>List of Subjects</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h1>List of Subjects</h1>

<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Action</th>
        </tr>
        <?php
        // Include database connection
        include 'db_connection.php';

        // Fetch subjects from the database
        $sql = "SELECT * FROM subject_Tbl";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["subject_ID"] . "</td>";
                echo "<td>" . $row["subject_Name"] . "</td>";
                echo "<td><a href='update_subject.php?id=" . $row["subject_ID"] . "'>Edit</a> | <a href='delete_subject.php?id=" . $row["subject_ID"] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No subjects found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <a href="add_subject.php">Add New Subject</a>
</div>

</body>
</html>