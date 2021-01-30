<?php
session_start();

include('./includes/validations.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == "logout") {
        logOut();
    } else {
        exit ("Invalid action");
    }
}

if (isset($_POST['connect'])) {

    $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

    $select_user = "select * from users where user_email='$email' AND user_pass='$pass' AND status='verified'";
    $query= mysqli_query($con, $select_user);
    $check_user = mysqli_num_rows($query);

    if($check_user == 1){
        $_SESSION['user_email'] = $email;

        echo "<script>window.open('home.php', '_self')</script>";
    }else {
        echo"<script>alert('Your Email or Password is incorrect')</script>";
    }

} else if (isset($_POST['register'])) {

    if (register($_POST['nameRegister'], $_POST['emailRegister'], $_POST['passwordRegister'])) {
        $_SESSION['emailLogin'] = $_POST['emailReg'];
        $_GET['page'] = "home";
    } else{
        header("Location: http://localhost/registrationForm/error.php");
        exit();
    }
}

if (  !isset( $_SESSION["emailLogin"])) {
    header("Location: http://localhost/registrationForm/index.php");
    exit();
}

if ( !isset($_GET['page']) ) {
    header("Location: http://localhost/registrationForm/index.php");
    exit();
} else {
    $page = $_GET['page'];
}

switch ($page) {
    case "home" : include ("./pages/home.php"); break;
    default: include('./error.php');
}

?>
