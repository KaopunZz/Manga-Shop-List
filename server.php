<?php

$con = mysqli_connect('localhost', 'root', '12345678', 'myproject');

if (!$con) {
    die("connection failed" . mysqli_connect_error());
}

?>