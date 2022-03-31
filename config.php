<?php
$servername = "localhost";
$database = "database";
$username = "username";
$password = "password";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Message template

$msgTmplt = "<div class='message'>
<div class='user'><b>@eddieobrams</b> says</div>
<div class='message'>Hey! Welcome to my website.</div>
</div>";