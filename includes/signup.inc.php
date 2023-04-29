<?php


if (isset($_POST["submit"])) {
    echo "Sign Up Successful";

    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];

    require_once("dbh.inc.php");
    require_once("functions.inc.php");



    if (emptyInputSignup($userName, $userEmail, $password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    } 

    if (invalidUserName($userName) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    } 
    if (invalidEmail($userEmail) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    } 

    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    } 
    if (userNameAlreadyExists($conn, $userName,$userEmail) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    } 


    createUser($conn, $userName, $userEmail, $password);

} else {
    echo "Sign Up UnSuccessful";
    header("location: ../signup.php");
    exit(); 
}
