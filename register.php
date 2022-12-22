<?php 
    session_start();
    include('server.php')
?> 
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Register</title>
    </head>

    <body>
        <div class="header">
            <h2>Register</h2>
        </div>

        <form action="register_db.php" method="post">
            <?php include('error.php') ?>
            <!-- notification message -->
            <?php if (isset($_SESSION['error'])): ?>
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
                <label for="shop name">ชื่อร้านค้า</label>
                <input type="text" name="shop name">
            </div>
            <div class="input-group">
                <label for="tel">เบอร์โทร</label>
                <input type="text" name="tel">
            </div>
            <div class="input-group">
                <label for="address">ที่อยู่ร้านค้า</label>
                <input type="text" name="address">
            </div>
            <div class="input-group">
                <label for="email">อีเมลล์</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label for="password_1">รหัสผ่าน</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label for="password_2">ยืนยันรหัสผ่าน</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <label for="status">สถานะ</label>
                <input type="text" name="status">
            </div>
            <div class="input-group">
                <button type="submit" name="reg_user" class="btn">Register</button>
            </div>
            <p>Already Member? <a href="login.php">Sign In</a></p>
        </form>
    </body>
    
</html>