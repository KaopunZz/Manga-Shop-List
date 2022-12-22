<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Login</title>
    </head>

    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form action="login_db.php" method="post">
        <!-- notification error message -->
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                    echo $_SESSION['error'] ; 
                    unset($_SESSION['error']) ; 
                    ?>
                </h3>
            </div>
        <?php endif ?>

            <div class="input-group">
                <label for="email">อีเมลล์</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password">
            </div>
            
            <div class="input-group">
                <button type="submit" name="login_user" class="btn">Log in</button>
            </div>

        <p>Not yet a Member? <a href="register.php">Sign Up</a></p>
        </form>
        
    </body>

</html>