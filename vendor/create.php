<?php






require_once '../config/connect.php';



$name = $_POST['name'];
$secondName = $_POST['secondName'];
$averageMark = $_POST['average'];
$typeOfEdu = $_POST['typeof'];



mysqli_query($connect,"INSERT INTO `users` (`id`,`Name`, `Second Name`, `Average Mark`, `Type of Education`) VALUES ( NULL, '$name', '$secondName', '$averageMark', '$typeOfEdu')");


header('Location: ../index.php');