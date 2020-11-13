<?php
    require_once('connection.php');

    $name = $pass = $gender = '';

    $name = $_POST['name'];
    $pass = $_POST['password'];
    $gender = $_POST['gender'];
    
    $fmt = "INSERT INTO accounts (username, password, gender) VALUES ('$name', '$pass', '$gender')";
    $result = mysqli_query($connection, $fmt);

    if ($result)
        echo "<title>Welcome $name</title>";
    else echo 'Error: '.$fmt;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Montserrat', 'sans-serif';
        }

        .bg {
            position: absolute;

            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            width: 100%;
            height: 100%;

            background: linear-gradient(45deg, rgb(27, 105, 248) 10%, rgb(243, 13, 212));

            z-index: -1;
        }

        h1 {
            padding-top: 20px;
        }

        h1, h2 {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="bg"></div>

    <center>
        <?php 
            echo "
                <h1>Welcome $name</h1>
                <br>
                <h2>Your password: $pass</h2>
                <h2>You're $gender</h2>
            ";
        ?>
    </center>
</body>
</html>