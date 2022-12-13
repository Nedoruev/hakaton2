<?php





require_once '../config/connect.php';



$id = $_POST['id'];
$name = $_POST['name'];
$secondName = $_POST['secondName'];
$averageMark = $_POST['average'];
$typeOfEdu = $_POST['typeof'];





mysqli_query($connect, "UPDATE `users` SET `Name` =  '$name', `Second Name` = '$secondName', `Average Mark` = '$averageMark', `Type of Education` = '$typeOfEdu' WHERE `users`.`id` = '$id'");



header('Location: ../index.php');