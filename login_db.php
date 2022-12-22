<?php 
session_start();
include("server.php");
$errors = array();

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "Email is required") ;
    }
    if (empty($password)) {
        array_push($errors, "Password is required") ;
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM detail WHERE email = '$email' AND password ='$password'" ;
        $result = mysqli_query($con, $query);
        
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header("location: index.php");
        } else {
            array_push($errors, "wrong email or password combination");
            $_SESSION['error'] = "wrong email or password TRY AGAIN";
            header("location: login.php");
        }
    }
}

?>