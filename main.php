<?php
include("server.php");
$sql = "SELECT * FROM detail";
$query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Manga Shop List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .bg {
            background-color: rgba(0, 0, 0, 0.342);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .bgcard {
            border-radius: 10px;
            text-align: center;
            vertical-align: middle;
            background-color: #ffffff;
            width: 800px;
            height: fit-content;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        html {
            background: url('https://i.pinimg.com/originals/25/0f/b6/250fb6cc8daf145c13901b0f107260ee.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }

        table {
            font-family: 'Fredoka One', cursive;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        body {
            font-family: 'Fredoka One', cursive;
        }

        h2{
            border-radius: 10px 10px 0px 0px;
            background: black;
            height: 50px;
            margin-top 0px;
            margin-bottom: 0px;
            color: white;
            padding-top: 10px;
        }
    </style>
</head>


<body>
    <div class="bg">
        <div class="bgcard">
            <h2>Manga Shop List</h2>
            <table>
                <tr>
                    <th>shop name</th>
                    <th>tel</th>
                    <th>address</th>
                    <th>email</th>
                    <th>status</th>
                </tr>
                <?php foreach ($query as $data) { ?>
                <tr>
                    <th>
                        <?= $data['shop name'] ?>
                    </th>
                    <th>
                        <?= $data['tel'] ?>
                    </th>
                    <th>
                        <?= $data['address'] ?>
                    </th>
                    <th>
                        <?= $data['email'] ?>
                    </th>
                    <th>
                        <?= $data['status'] ?>
                    </th>
                </tr>
                <?php } ?>
            </table>

        </div>
    </div>


</body>

</html>