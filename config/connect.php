<?php



define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'hackathon');



$connect = mysqli_connect('localhost', 'root', '', 'hackathon');



if (!$connect) {
    die('Error connect to database!');
}