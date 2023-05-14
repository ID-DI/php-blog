<?php
session_start();
require_once __DIR__ . "/admin/config/dbcon.php";

if(isset($_POST['loginBtn']))
{
    $email =  mysqli_real_escape_string($con, $_POST['email']);
    $password =  mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['first_name'].' '.$data['last_name'];
            $user_role = $data['role_as'];
            $user_status = $data['status'];
            $user_email = $data['email'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['role'] =  $user_role; //1 = admin
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_status'=>$user_status,
            'user_email'=>$user_email,
        ];
        if($_SESSION['role'] == 1)
        {
            $_SESSION['message'] = "Welcome admin";
            header("Location: admin/index.php");
            die();
        }
        elseif($_SESSION['role'] == 0)
        {
            $_SESSION['message'] = "Welcome " . $user_name.".";
            header("Location: index.php");
            die();
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid email or password";
        header("Location: login.php");
        die();
    }
}
else
{
    $_SESSION['message'] = "You're not allowed to acces this file.";
    header("Location: login.php");
    die();
}