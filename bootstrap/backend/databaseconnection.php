<?php
define("HOST","127.0.0.1");
define("USER","root");
define("PASSWORD","");
define("DB", "users");


$connection = mysqli_connect(HOST,USER,PASSWORD,DB);

if(mysqli_connect_errno()){
    echo "Error => ".mysqli_connect_error();
}