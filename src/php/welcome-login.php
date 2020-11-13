<?php
    require_once('connection.php');

    $name = $pass = '';

    $name = $_POST['name'];
    $pass = $_POST['password'];

    $fmt = "SELECT * FROM accounts WHERE username = '$name' AND password = '$pass'";
    $result = mysqli_query($connection, $fmt);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $username = $row['username'];

            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
        }
        echo "
            <center>
                <h1>Welcome $name</h1>
                <br>
                <h2>You've successfully logged in!</h2>
            </center>
        ";
        
    }
    else echo '<center><h3><font color="#fff">Invalid username or password!</font></h3></center>';
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

        h3 {
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="bg"></div>

    <!-- <center>
        <br>
        <h2>You've successfully logged in!</h2>
    </center> -->
</body>
</html>