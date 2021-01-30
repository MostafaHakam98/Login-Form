<?php

$status = session_status();

if($status == PHP_SESSION_NONE) {
    session_start();
}

$GLOBALS['machine'] = 'localhost';
$GLOBALS['user'] = 'root';
$GLOBALS['password'] = '';
$GLOBALS['dataBase'] = 'registrationForm';

$con = mysqli_connect($GLOBALS['machine'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['dataBase']);


function logIn($email, $password) {
    $request = "SELECT email, password
                FROM user
                WHERE email = '$email' AND password = '$password';";
    $result = "";

    $connection = mysqli_connect($GLOBALS['machine'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['dataBase']);
    if(!mysqli_connect_errno())
        $result = mysqli_query($connection, $request);
    else
        printf("Connection failed: %s", mysqli_connect_error());

    if(mysqli_num_rows($result) == 1)
        $return = true;
    else
        $return = false;

    mysqli_close($connection);
    return $return;
}

function logOut() {
    session_destroy();
    header("Location: http://localhost/registrationForm/index.php");
}

function register($name, $email, $password) {
    $connection = mysqli_connect($GLOBALS['machine'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['dataBase']);

    if(mysqli_connect_errno())
        printf("Connection failed: %s", mysqli_connect_error());

    $date = date('y-m-d h:i:s', time());
    $query = "INSERT INTO User (`email`, `name`, `password`, `registration_date`)
              VALUES ('$email', '$name', '$password', '$date')";

    if(mysqli_query($connection, $query)) {
        $result = true;
    } else {
        echo "ERROR: Account not created, please try again. " . mysqli_error($connection);
        $result = false;
    }

    mysqli_close($connection);
    return $result;
}

?>