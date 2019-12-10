<?php

define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'oTsM91rADk');
define('DB_PASSWORD', 'gOoiKJsvSa');
define('DB_NAME', 'oTsM91rADk');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
