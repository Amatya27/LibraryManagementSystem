<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login_style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="bg">
	     <header>
                    <h2>
                        LIBRARY MANAGEMENT SYSTEM
                    </h2>
                    <ul>
                        <li>Home</li>
                        <li>Books</li>
                        <li>Student Login</li>
                        <li>Admin Login</li>
                    </ul>
         </header>
        <div class="box">
            <form action="connection.php" class="loginform" method="post">
                <h3>Sign In</h3><br>
                <div class="email">
                    <input name = "email" type="text" placeholder="Email" required>
                </div>
                <br>
                <div class="pass">
                    <input name ="password" type="password" placeholder="Password" required>
                </div>
                <br>
                <button name = "button" type="submit">Log in</button>
            </form>
            <h5 id="newaccnt">Don't Have An Account?<a href="register.php"> Sign Up</a></h5>
        </div>
    </div>
	
</body>
</html>