

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        .chatbox{
	font-family: "Roboto Mono", monospace;
	padding-top: 50px;
	background: rgb(80, 140, 250);
	width: 100%;
	height: 500px;
	border-radius: 50px 50px 0 0;
	box-shadow: 5px 5px 40px #0e4f64;
	padding-bottom: 50px;
	overflow-y:scroll;
}

.chatbox .message{
	background:rgb(107, 150, 231);
	padding-left: 20px;
	margin-bottom: 10px;
	color: white;
}


main{
	position: absolute;
	width: 80vw;
	height: 560px;
	left: 50%;
	transform: translate(-50%, 10%);
}

.messagebox{
	width: 100%;
	font-family: "Roboto Mono", monospace;
}

.messagebox input{
	height: 40px;
	border: none;
	background: rgb(67, 124, 231);

}

.messagebox input[type="text"]{
	width: 93%;
	border-radius: 0 0 0 20px;
	padding-left: 20px;
	color: white;
}

.messagebox input[type="text"]::placeholder{
	color: white;
}

.messagebox input[type="text"]:focus{
	border: none;
}

.messagebox input[type="submit"]{
	width: 7%;
	border-radius: 0 0 20px 0; 
	color: white;
	position: fixed;
	cursor: pointer;
	background: rgb(83, 136, 235);
}
    </style>
    <title>eddieobrams | chat</title>
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
        <a href="signin.php" class="cta"><button>Sign In</button></a>
    </header>
    <main>
        <div class="chatbox">
            
        </div>
        <div class="messagebox">
            <form method="post">
                <input type="text" placeholder="Message here..." name="message">
                <input type="submit" value="Send">
            </form>
        </div>
    </main>
</body>
</html>