<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>task 1</p>
    <?php
   phpinfo(1);
   phpinfo(4);
   ?>
   <p>task 2</p>
   <?php
echo "Tomorrow I \'ll learn PHP global variables."."\n"; 
echo "This is a bad command : del c:\\*.*"."\n"; 
?>

<p>task 3</p>
     <!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>
    <p>task4</p>
    <?php  
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
?>  
    <p>task5</p>
    <?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>
   <p>task 6</p>
   <?php
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>
    <p>task7</p>
    <?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>
     <p>task8</p>
     <?php
       header('Location: https://www.w3resource.com/');
?>


</body>
</html>