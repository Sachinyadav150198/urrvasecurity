<?php
    DEFINE('DATABASE_HOST','localhost');
    DEFINE('DATABASE_USER','urvyasecurity');
    DEFINE('DATABASE_PASSWORD','Aniket@123');
    DEFINE('DATABASE_NAME','urvyasecurity');

    $conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);
    if(!$conn)
    {
        trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
    }
?>  