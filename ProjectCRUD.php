<!DOCTYPE html>
<html>
<head>
    <title>List of Projects</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h1>List of Projects</h1>

<div class="container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Project Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include database connection
            include 'db_connection.php';

            // Fetch projects from the database
            $sql = "SELECT * FROM project_Tbl";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Project_ID"] . "</td>";
                    echo "<td>" . $row["Project_Name"] . "</td>";
                    echo "<td><a href='update_subject.php?id=" . $row["Project_ID"] . "'>Edit</a> | <a href='delete_subject.php?id=" . $row["Project_ID"] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No projects found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <a href="subject_index.php">Add New Project</a>
</div>

</body>
</html>