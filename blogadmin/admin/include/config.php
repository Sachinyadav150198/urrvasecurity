<?php

    // DEFINE('DATABASE_HOST','localhost');

    // DEFINE('DATABASE_USER','urvyasecurity_blog');

    // DEFINE('DATABASE_PASSWORD','urvyasecurity_blog');

    // DEFINE('DATABASE_NAME','urvyasecurity_blog');


    DEFINE('DATABASE_HOST','localhost');

    DEFINE('DATABASE_USER','root');

    DEFINE('DATABASE_PASSWORD','');

    DEFINE('DATABASE_NAME','crm');


    $conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);

    if(!$conn)

    {

        trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());

    }

?>