<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
            $name_shop = mysqli_real_escape_string($con, $_POST['shop name']);
            $tel = mysqli_real_escape_string($con, $_POST['tel']);
            $address = mysqli_real_escape_string($con, $_POST['address']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
            $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
            $status = mysqli_real_escape_string($con, $_POST['status']);
    
            if (empty($name_shop)) {
                array_push($errors, "Shop name is required");
            }
            if (empty($tel)) {
                array_push($errors, "Tel is required");
            }
            if (empty($address)) {
                array_push($errors, "Address is required");
            }
            if (empty($email)) {
                array_push($errors, "Email is required");
            }
            if (empty($password_1)) {
                array_push($errors, "Password is required");
            }
            if (empty($status)) {
                array_push($errors, "Status is required");
            }
            if ($password_1 != $password_2) {
                array_push($errors, "The two Password do not match");
            }

            $user_check_query = "SELECT * FROM detail WHERE email = '$email'";
            $query = mysqli_query($con, $user_check_query);
            $result = mysqli_fetch_assoc($query);
        
            if($result) {
                if ($result['email'] === $email){
                    array_push($errors, "Email already exists");
                }
            }
            
            if (count($errors) == 0) {
                $password = md5($password_1);
    
                $sql = "INSERT INTO detail (name_shop, tel, address, email, password, status) VALUES ('$name_shop', '$tel', '$address', '$email', '$password', '$status')";
                mysqli_query($con, $sql);
    
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            } else {
                array_push($errors, "Email already exists");
                $_SESSION['error'] = "Email already exists";
                header("location: register.php");
            }
        }

?>