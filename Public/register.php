<?php
include __DIR__ . '/../config/databaseConnection.php';
session_start();
$errorMsg = "";

if(isset($_POST["signup"])){ //sign up
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"]; //confirm password

    
    $checkQuery = "SELECT username FROM users WHERE username = '{$username}'";
    $checkQueryResult = $conn->query($checkQuery); // check if there is an existing data from database
    if($checkQueryResult->num_rows > 0){
        $errorMsg = "Username already existed";
    }else{
        if($password == $password2){ //for confirming password
            $signupQuery = "INSERT INTO users (name, username, email, password)
            VALUES ('{$name}', '{$username}', '{$email}', '{$password}')";         //need to be change for current database
            $signupQueryResult =  $conn->query($signupQuery);
            header("Location: index.php");
        }else{
            $errorMsg = "Password do not match";
        }
    }
}

if(isset($_POST["login"])){ // login 
    $username = $_POST["username"];
    $password = $_POST["password"];
    $LoginQuery = "SELECT idusers AS usersID FROM users WHERE username = '{$username}' AND password = '{$password}'"; //Database location
    $loginQueryResult = $conn->query($LoginQuery); //Query for login
    if($loginQueryResult->num_rows > 0){ //fetch data from database to authenticate login
        while($row = $loginQueryResult->fetch_assoc()){
            $_SESSION["idSession"] = $row["usersID"];
            header("Location: index.php");
        }
    
    }else{
        $errorMsg = "Incorrect username/password";
    }
}
