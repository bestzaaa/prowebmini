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
        <h2>Register</h2>
    </div>

    <form action="register2.php" method="post">

    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>

    <div class="input-group">
        <label for="email">email</label>
        <input type="email" name="email">
    </div>

    <div class="input-group">
        <label for="id">Id Number</label>
        <input type="password" name="id">
    </div>

    <div class="input-group">
        <label for="password">phone number</label>
        <input type="password" name="password">
    </div>

    <div class="input-group">
        
        <button type="submit" name="reg_user" class="btn">Register</button>

    </div>

    <p>Already a member?<a href="login.php">Sign in</a></p>




</form>
</body>
</head>    