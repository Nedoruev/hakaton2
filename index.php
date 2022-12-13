<?php



require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>project</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #532f2f;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>

            <th>Name</th>
            <th>Second Name</th>
            <th>Av.Mark</th>
            <th>Type of Education</th>
        </tr>

        <?php



            $users = mysqli_query($connect, "SELECT * FROM `users`");



            $users = mysqli_fetch_all($users);



            foreach ($users as $user) {
                ?>
                    <tr>
                        <td><?= $user[1] ?></td>
                        <td><?= $user[2] ?></td>
                        <td><?= $user[3] ?></td>
                        <td><?= $user[4] ?></td>


                        <td><a  href="update.php?id=<?= $user[0] ?>">Update</a></td>
                        <td><a style="color: #967a7a; " href="vendor/delete.php?id=<?= $user[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Add new user</h3>
    <form action="vendor/create.php" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>Second Name</p>
        <input type="text" name="secondName">
        <p>Av.Mark</p>
        <input type="number" name="average"> <br> <br>
        <p>Type of Education</p>
        <input type="text" name="typeof">
        <button type="submit">Add new user
    </form>
</body>
</html>
