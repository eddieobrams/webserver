<?php

session_start();

$servername = "localhost";
$database = "userdb";
$username = "root";
$password = "raspberry";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Message template

$msgTmplt = "<div class='message'>
<div class='user'><b>@eddieobrams</b> says</div>
<div class='message'>Hey! Welcome to my website.</div>
</div>";

function tokenize($stringA, $stringB){
    $tokenizedStringRaw = $stringA . $stringB;
    return md5($tokenizedStringRaw);
}

function hashPassword($password){
    return sha1($password);
}