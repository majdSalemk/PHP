<?php
$conn=new Mysqli("localhost","root","","form");
if($conn->connect_error){
    die("Connection Faild: ".$conn->connect_error);
}else{
    echo "connected successfully <br>";
}
?>