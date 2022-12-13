<?php



    require_once 'config/connect.php';



    $user_id = $_GET['id'];



    $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$user_id'");



    $user = mysqli_fetch_assoc($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <p>Name</p>
        <input type="text" name="name" value="<?= $user['Name'] ?>">
        <p>Second Name</p>
        <input type="text" name="secondName" value="<?= $user['Second Name'] ?>">
        <p>Average Mark</p>
        <input type="number" name="average" value="<?= $user['Average Mark'] ?>">
        <p>Type Of Education</p>
        <input type="text" name="typeof" value="<?= $user['Type of Education'] ?>"><br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>