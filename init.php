<?php



//ta opcja jest chyba jepsza
require __DIR__ . '/vendor/autoload.php';
//require 'vendor/autoload.php';


$connection = mysqli_connect("127.0.0.1", "root", "password", "faker1");

if (!$connection){
    die ("Error in database connection");
}





?>