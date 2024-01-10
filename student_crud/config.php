<?php
define ('DB_SEVER','localhost');
define ('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','student_crud');

$link = mysqli_connect(DB_SEVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if (!$link){
    die("Khong the ket noi . " . mysqli_connect_error());
}
?>