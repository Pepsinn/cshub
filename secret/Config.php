<?php
   define('DB_SERVER', 'remotemysql.com');
   define('DB_USERNAME', 'uxOSfp0YXc');
   define('DB_PASSWORD', 'bibRjuaPql');
   define('DB_DATABASE', 'uxOSfp0YXc');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
