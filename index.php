<?php 
    session_start();

        if(!isset($_SESSION['email'])){
            $_SESSION['msg'] = "you must log in first";
            header('location: login.php');
        }

        if(isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['email']);
            header('location: login.php');
        }
        
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Home Page</title>
    </head>
    <body>
        <div class="header">
           <h2>Home Page</h2> 
        </div>

        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])): ?>
            <div class="success">
                <h3>
                    <?php 
                    echo $_SESSION['success'] ; 
                    unset($_SESSION['success']) ; 
                    ?>
                </h3>
            </div>
            <?php endif ?>
            <!-- logged in user information -->
            <?php if (isset($_SESSION['email'])): ?>
            <p>Welcome<strong>
                <?php echo $_SESSION['email'] ; ?>
            </strong></p>
            <?php endif ?>
        </div>
        <?php
        header('location: main.php');
        ?>

    </body>
    
</html>