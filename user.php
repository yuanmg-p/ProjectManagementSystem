<?php
session_start();
include ('./conn/conn.php');

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Fetch the user's name from the database
    $stmt = $conn->prepare("SELECT `name` FROM `tbl_user` WHERE `tbl_user_id` = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $user_name = $row['name'];
    }

    ?>

   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes </title>
    <link rel="stylesheet" href="class.css">
</head>
<body>
    <div class="topnav">
        <a class="login" href="#"><img src="photos/logoTBI.png" width="30" 
            height="40"></a>
        <a class="Home" style="margin-right: 90%">Home</a> <!-- Adjusted margin-right here -->
        
        <div class="icons">
            <a href="add"><img src="photos/add.png"></a>
            <a href="add"><img src="photos/user.png"></a>
        </div>
    </div>

    <div class="bottomnav">
        <div class="sign-out" onclick="signOut()">Sign Out</div>
    </div>

    <div class="sidebar">
        <a href="#Home" class="Home">Home</a> <!-- Vertical navigation link -->
    </div>


     <!-- Container for projectcard -->
<div class="project-container-wrapper">

  </div>

  <div class="project-container-wrapper">
    <div class="projectCard__container">
        <div class="projectCard__container">
            <div class="projectCard">
                <div class="projectCard__upper">
                    Cancer App   
                    <div class="projectCard__group"> <!-- Added new div for BSIT -->
                        <a href="#" class="projectCard__group-link">BSIT</a> <!-- Added clickable BSIT text -->
                        <div class="projectCard__creator">Cesar Ian Benablo</div> <!-- Added creator name -->
                    </div>
                    <div class="user-image">
                        <img src="photos/user.png">
                    </div>
                </div>
                <div class="projectCard__middle">
                    <div class="user">Middle Content</div>
                </div>
            </div>
        </div>
    </div>
    <div class="projectCard2__container">
        <div class="projectCard2__container">
            <div class="projectCard2__container">
                <div class="projectCard2">
                    <div class="projectCard2__upper">
                        Cancer App   
                        <div class="projectCard2__group"> <!-- Added new div for BSIT -->
                            <a href="#" class="projectCard2__group-link">BSIT</a> <!-- Added clickable BSIT text -->
                            <div class="projectCard2__creator">Cesar Ian Benablo</div> <!-- Added creator name -->
                        </div>
                        <div class="user-image2">
                            <img src="photos/user.png">
                        </div>
                    </div>
                    <div class="projectCard2__middle">
                        <div class="user">Middle Content</div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <div class="projectCard3__container">
        <div class="projectCard3__container">
            <div class="projectCard3__container">
                <div class="projectCard3">
                    <div class="projectCard3__upper">
                        Cancer App   
                        <div class="projectCard3__group"> <!-- Added new div for BSIT -->
                            <a href="#" class="projectCard3__group-link">BSIT</a> <!-- Added clickable BSIT text -->
                            <div class="projectCard3__creator">Cesar Ian Benablo</div> <!-- Added creator name -->
                        </div>
                        <div class="user-image3">
                            <img src="photos/user.png">
                        </div>
                    </div>
                    <div class="projectCard3__middle">
                        <div class="user">Middle Content</div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    </div>
</div>
  

    <script>
        function signOut() {
            // Add sign-out functionality here
            alert("Signing out...");
        }
    </script>
</body>
</html>




    <?php
} else {
    header("Location: http://localhost/SAD3/");
}

?>

