<?php
session_start();
require_once __DIR__ . "/admin/config/dbcon.php";

if(isset($_POST['registerBtn']))
{
    $name = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName =  mysqli_real_escape_string($con, $_POST['lastName']);
    $email =  mysqli_real_escape_string($con, $_POST['email']);
    $password =  mysqli_real_escape_string($con, $_POST['password']);
    $confirmPassword =  mysqli_real_escape_string($con, $_POST['confirmPassword']);

    if($password == $confirmPassword)
    {
        $checkEmail = "SELECT email FROM users WHERE email = '$email'";
        $checkEmail_run = mysqli_query($con, $checkEmail);
        
        if(mysqli_num_rows($checkEmail_run) > 0)
        {
            $_SESSION['message'] = "This email is registrated in our database.";
            header("Location: register.php");
            die();
        }
        else
        {
            $user_query = "INSERT INTO users (first_name,last_name,email,pass) VALUES('$name','$lastName','$email','$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
            {
                $_SESSION['message'] = "Registerd Successfully.";
                header("Location: login.php");
                die();
            }
            else
            {
                $_SESSION['message'] = "Something went wrong. Try again.";
                header("Location: register.php");
                die();
            }
        }
    }
    else 
    {
        $_SESSION['message'] = "The passwords do not match!";
        header("Location: register.php");
        die();
    }
}
else
{
    header("Location: register.php");
    die();
}
?>