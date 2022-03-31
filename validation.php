<?php 
require 'config.php';

if($_POST['signup']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
    $token = tokenize($username, $password);

    if(!empty($password) && !empty($username) && $password == $passwordConf){
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        print($result);

        if(mysqli_num_rows($result) == 0){
            $password = hashPassword($password);

            $sql = "INSERT INTO users (username, password, token) VALUES ('$username', '$password', '$token')";
            mysqli_query($conn, $sql);

            // log in the user
            $_SESSION['username'] = $username;
            $_SESSION['token'] = $token;
            header('location: index.php');
        }
    }
}

if($_POST['login']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordHashed = hashPassword($password);

    if(!empty($username) && !empty($password)){
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$passwordHashed'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            // log in the user
            $_SESSION['username'] = $username;
            $_SESSION['token'] = $token;
            header('location: index.php');
        }
    }
}