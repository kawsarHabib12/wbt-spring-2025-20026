<?php
$username = $password = "";
$usernameErr = $passwordErr = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data))); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Username email is required";
    } else {
        $username = cleanInput($_POST["username"]);
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $usernameErr = " Invalid email address";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = cleanInput($_POST["password"]);
        if (!preg_match('/^[0-9]{8}$/', $password)) {
            $passwordErr = "Invalid Password.";
        }
    }
}
 

?>