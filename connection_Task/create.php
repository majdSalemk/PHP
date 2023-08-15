<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="create.php">

        <input type="text" name="name" placeholder="name">
        <br>
        <input type="email" name="email" placeholder="email">
        <br>
        <input type="submit" name="submit" value=submit>
    </form>
<?php
    include "connect.php";
    if(isset($_POST['submit'])){
        $username=$_POST['name'];
        $email=$_POST['email'];

    }
$query="INSERT INTO users (name , email ) VALUES ('$username' , '$username') ";
Mysqli_query($conn , $query);



    ?>
</body>
</html>