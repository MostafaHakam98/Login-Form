function validateLogin() {
    var email = document.forms["loginForm"]["emailLogin"].value;
    var password = document.forms["loginForm"]["passwordLogin"].value;

    if (email === "" || email === null) {
        alert("Please fill the email field");
        return false;
    }

    if (password === "" || password === null) {
        alert("Please fill the password field");
        return false;
    }
}

function validateRegistration() {
    var name = document.forms["registerForm"]["nameRegister"].value;
    var email = document.forms["registerForm"]["emailRegister"].value;
    var password = document.forms["registerForm"]["passwordRegister"].value;
    var confirmPassword = document.forms["registerForm"]["confirmPasswordRegister"].value;

    if (name === "" || name === null) {
        alert("Please fill the name field");
        return false;
    }

    if (email === "" || email === null) {
        alert("Please fill the email field");
        return false;
    }

    if (password === "" || confirmPassword === "" || password === null || confirmPassword === null) {
        alert("Please fill the password field");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Please enter two identical passwords");
        return false;
    }

    return true;
    }
}

function redirect() {
    window.location.href = "http://localhost/database_project/lifprojet/register.php";
}