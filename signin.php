<?php

require 'validation.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="forms.css">
    <title>eddieobrams | sign in</title>
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
    <main>
        <form autocomplete='off' method='post' class='form'>
            <div class='control'>
              <h1>
                Sign In
              </h1>
            </div>
            <div class='control block-cube block-input'>
              <input name='username' placeholder='Username' type='text'>
              <div class='bg-top'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg-right'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg'>
                <div class='bg-inner'></div>
              </div>
            </div>
            <div class='control block-cube block-input'>
              <input name='password' placeholder='Password' type='password'>
              <div class='bg-top'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg-right'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg'>
                <div class='bg-inner'></div>
              </div>
            </div>
            <button class='btn block-cube block-cube-hover' name="login" type='submit'>
              <div class='bg-top'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg-right'>
                <div class='bg-inner'></div>
              </div>
              <div class='bg'>
                <div class='bg-inner'></div>
              </div>
              <div class='text'>
                Log In
              </div>
            </button>
            <div class="link"><a href="signup.php">No account? Sign Up</a></div>
        </form>
    </main>
</body>
</html>