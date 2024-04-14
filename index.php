<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAD</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(./photos/temp.png);
          
          
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;        
            overflow: hidden;
            height: 100vh;
        }
        
        .main { 
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0);
            height: 100vh;
        }

        .login-container, .registration-container {
            width: 500px;
            box-shadow: rgba(255, 0, 120, 1) 0px 3px 25px;
            border-radius: 10px;
            background-color: rgba(241, 241, 243, 1);
            padding: 30px;
            color: rgb(0, 0, 0, 1);
            margin-left: 80px;
            font-weight: bold;
        }
        .left-container{
            text-align: center;
            margin-right: 150px;
            color: rgb(255, 255, 255, 1);
        }

        .left-container > h1 {
            font-size: 90px !important;
        }
        

        .title-container > h1 {
            font-size: 90px !important;
            color: rgb(255, 255, 255);
            text-shadow: 2px 4px 2px rgba(200,200,200,0.6);
        }

        .show-form {
            color: rgb(59, 130, 251, 1);
            text-decoration: underline;
            cursor: pointer;
        }

        .show-form:hover {
            color: rgb(100, 100, 255);
        }
    </style>
</head>
<body>
    
    <div class="main row">

        <div class="left-container col-6">
            <h1>sProgress Management System</h1>
            <h1>(Marian TBI)</h1>
        </div>

        <div class="main-container col-4">
        <!-- Login Form -->
        <div class="login-container" id="loginForm">
        <center><img src="photos/logoTBI.png"> </center>
         
            <h2 class="text-center"> </h2>
            <p class="text-center">Please enter your login details.</p>
            <div class="login-form">
                <form action="./endpoint/login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                    <div class="row m-auto">
                    <div class="form-group form-check col-6">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                    </div>
                    <small class="show-form col-6 text-center pl-4" onclick="showForm()">No Account? Register Here.</small>
                    </div>

                    <button type="submit" class="btn btn-primary login-btn form-control">Login</button>
                </form>
            </div>
        </div>

        

        <!-- Registration Area -->
        <div class="registration-container" id="registrationForm" style="display:none;">
            <h2 class="text-center">Register Your Account!</h2>
            <p class="text-center">Please enter your personal details.</p>
            <div class="registration-form">
            <form action="./endpoint/add-user.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control" id="role" name="role">
                        <option>-select-</option>
                        <option value="admin">Admin</option>
                        <option value="user">Student</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="registerUsername">Username:</label>
                    <input type="text" class="form-control" id="registerUsername" name="username">
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password:</label>
                    <input type="password" class="form-control" id="registerPassword" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                </div>
                <div class="form-group float-right">
                    <small class="show-form" onclick="showForm()">Already have an account? Login Here.</small>
                </div>
                <button type="submit" class="btn btn-primary login-register form-control">Register</button>
            </form>

            </div>

        </div>
        </div>


    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        function showForm() {
            const loginForm = document.getElementById('loginForm');
            const registrationForm = document.getElementById('registrationForm');

            if (registrationForm.style.display == 'none') {
                loginForm.style.display = 'none';
                registrationForm.style.display = '';
            } else {
                loginForm.style.display = '';
                registrationForm.style.display = 'none';
            }
        }
    </script>
</body>
</html>