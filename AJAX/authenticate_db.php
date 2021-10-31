<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','admin');
    define('DB1','indon');
    
    $db1 = new mysqli(HOST,USER,PASS,DB1);

    if (!$db1) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
     
    echo 'Connected... ' . mysqli_get_host_info($db1) . "\n";
?>