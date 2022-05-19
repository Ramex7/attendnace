<?php 

define('DB_NAME','adminlogin');
define('DB_USER','root');
define('DB_PASSWORD','1234');
define('DB_HOST','localhost');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
