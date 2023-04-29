<?php

function emptyInputSignup($userName,$userEmail,$password,$passwordRepeat)
{
    global $result;
    
    if (empty($userName) || empty($userEmail) || empty($password) || empty($passwordRepeat)) {
      $result = true;  
    } else {
        $result = false;
    }
    return $result;
}

function invalidUserName($userName)
{
     global $result;
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
      $result = true;  
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($userEmail)
{
     global $result;
    
    if (!filter_var($userEmail,FILTER_VALIDATE_EMAIL)) {
      $result = true;  
    } else {
        $result = false;
    }
    return $result;
}


function passwordMatch($password,$passwordRepeat)
{
     global $result;
    
    if ($password !== $passwordRepeat) {
      $result = true;  
    } else {
        $result = false;
    }
    return $result;
}

function userNameAlreadyExists($conn, $userName, $userEmail)
{
    $sql = "SELECT * FROM user_table WHERE UserName = ? OR UserEmail =?;" ;

    $stmt = mysqli_stmt_init($conn);

    

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss",$userName, $userEmail);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){

      return $row;  

    } else {
        $result = false;
        return $result;


    }

    mysqli_stmt_close($stmt);

} 

function createUser($conn,$userName,$userEmail,$password){
    $sql = "INSERT INTO user_table (UserName, UserEmail, Password) VALUES (?,?,?);" ;


    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit(); 
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss",$userName, $userEmail, $hashedPassword);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();

} 

function emptyInputLogin($userName,$password)
{
    global $result;
    
    if (empty($userName) || empty($password)) {
      $result = true;  
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn,$userName,$password){

    
    $userNameExists = userNameAlreadyExists($conn,$userName, $password);

    if($userNameExists === false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    $passwordHashed = $userNameExists["Password"];
    $checkPassword = password_verify($password,$passwordHashed);

    if ($checkPassword === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } 

    else if ($checkPassword === true){
        
        session_start();

        $_SESSION["userid"] = $userNameExists["UserID"];
        $_SESSION["userName"] = $userNameExists["UserName"];
        header("location: ../index.php");
        exit();
    }
}