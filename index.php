<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/validations.js"></script>
    <?php include('./includes/validations.php'); ?>

</head>

<body>
    <div class ="login-page">
        <div class="form">
            <form class="login-form" name="loginForm" action="redirections.php" method="POST">
                <h1>Log In</h1>
                <h4>Email</h4>
                <input type = "email" name = "emailLogin" id = "emailLogin" placeholder = "Enter your email address" />
                <br />
                <h4>Password</h4>
                <input type = "password" name = "passwordLogin" id = "passwordLogin" placeholder = "Enter your password"/>
                <button type = "submit" name = "connect" onclick = "return validateLogin()">Login</button>
                <hr>
                <p class="message">New User? <a href = "#">Register</a></p>
            </form>

            <form class="register-form" name="registerForm" action="redirections.php" method="POST">
                <h1>Register</h1>
                <h4>Name</h4>
                <input type="text" name = "nameRegister" id = "nameRegister" placeholder = "Enter your full name" />
                <br />
                <h4>Email</h4>
                <input type = "email" name = "emailRegister" id = "emailRegister" placeholder = "Enter your email-address" />
                <br />
                <h4>Password</h4>
                <input type = "password" name = "passwordRegister" id = "passwordRegister" placeholder = "Enter your password"/>
                <input type = "password" name = "confirmPasswordRegister" id = "confirmPasswordRegister" placeholder = "Confirm your password"/>
                <button type = "submit" name = "register" onclick = "return validateRegister()">Register</button>
                <hr>
                <p class="message">Already have an account? <a href = " ">Log In</a></p>
            </form>
        </div>
    </div>


    <!-- Using Code Pen JS Code -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/script.js"></script>

</body>

</html>