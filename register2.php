<?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_post['reg_user'])) {
        $usename = mysqli_real_escape_string($conn, $_post['username']);
        $email = mysqli_real_escape_string($conn, $_post['email']);
        $id = mysqli_real_escape_string($conn, $_post['id']);
        $password = mysqli_real_escape_string($conn, $_post['password ']);

        if(empty($username)){
            array_push($errors,"Username is required");
        }
        if(empty($email)){
            array_push($errors,"email is required");
        }
        if(empty($id)){
            array_push($errors,"Id is required");
        }
        if(empty($number)){
            array_push($errors,"number is required");
        }

        $user_check_query = "SELECT * FROM user WHERE id = '$id' OR password  = '$password ' ";
        $query = mysql_query($conn , $user_check_query);
        $result = mysqli_fatch_assoc($query);

        if($result){
            if($result['id'] === $id){
                array_puch($errors . "Id already exists");
            }
            if($result['password'] === $password){
                array_puch($errors . "password already exists");
            }
        }
        
    }





?>