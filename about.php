<?php

require 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>eddieobrams | about</title>
</head>
<body>
    <header>
        <h1 class="logo">eddieobrams</h1>
        <nav>
            <ul class="nav_links">
                <li><a href="about.php">About</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="chat.php">Chat</a></li>
            </ul>
        </nav>
        <?php if(empty($_SESSION['username'])): ?>
            <a href="signin.php" class="cta"><button>Sign In</button></a>
        <?php endif; ?>
        <?php if(!empty($_SESSION['username'])): ?>
            <a href="#" class="cta"><button>@<?php echo $_SESSION['username'] ?></button></a>
        <?php endif; ?>
    </header>
</body>
</html>