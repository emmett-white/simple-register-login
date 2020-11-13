<?php
    $connection = mysqli_connect('localhost', 'root', '', 'reglog_db');

    if (!$connection)
        echo 'Database connection failed!';
?>