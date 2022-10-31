<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css" >
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="register2.php">

    <div class="input-group">
        <label for="username">Email</label>
        <input type="email" name="username">
    </div>

    <div class="input-group">
        <label for="username">phone number</label>
        <input type="password" name="username">
    </div>

    

    <div class="input-group">
        
        <button type="submit" name="Login_user" class="btn">Login</button>

    </div>

    <p>Not yet a member<a href="register.php">Sign up</a></p>




</form>
</body>
</head>    