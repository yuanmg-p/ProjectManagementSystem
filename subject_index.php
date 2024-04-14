<!DOCTYPE html>
<html>
<head>
    <title>Add Subject</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Add Project</h1>

<div class="container">
    <form action="add_subject.php" method="post">
        <label for="subject_name">Project Name:</label>
        <input type="text" id="subject_name" name="subject_name" placeholder="Enter project name" required>
        <label for="subject_desc">Project Description:</label>
        <input type="text" id="subject_desc" name="subject_desc" placeholder="Enter project description" required>
        <input type="submit" value="Add Project">
    </form>
</div>

</body>
</html>