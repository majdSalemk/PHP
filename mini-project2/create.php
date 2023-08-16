<?php
require("dbcon.php");
header("Content-Type: application/json");


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $data=json_decode(file_get_contents("php://input"),true);
    $firstname=$data['firstname'];
    $middlename=$data['middlename'];
    $lastname=$data['lastname'];
    $familyname=$data['familyname'];
    $email=$data['email'];
    $phonenumber=$data['phonenumber'];
    $password=$data['password'];
    $dateofbirth=$data['dateofbirth'];
    // $createDate=$data['createDate'];
    // print_r($data);

    $sql="INSERT INTO `register`(`firstname`, `middlename`, `lastname`, `familyname`, `email`, `phonenumber`, `password` , `dateofbirth`) 
    VALUES ('$firstname','$middlename','$lastname','$familyname','$email','$phonenumber','$password','$dateofbirth')";

    $response=array();
    if($conn->query($sql)===true){
        $response['message']="Data stored successfully";
    }else{
        $response['message']="Error: ".$sql."<br".$conn->error;
    }
    echo json_encode($response);
}
$conn->close();
?>