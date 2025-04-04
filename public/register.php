<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <form action="registration.php" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please Enter Details</h2>
        <label for="inputUsername">Username</label>
        <input name="Username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputEmail">Email</label>
        <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="janedoe@gmail.com" required><br>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button name="Submit" value="Register" class="button" type="submit">Sign up</button>
        <div class="links-container">
            <p>Have an account? <a href="login.php">Login Here</a></p>
        </div>
    </form>
</div>
</body>
</html>