<?php

require "dbcon.php"; 

$response = array();

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (isset($email) && isset($password)) {
    try {
        $sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = array(
                    'firstname' => $row['firstname'],
                    'middlename' => $row['middlename'],
                    'lastname' => $row['lastname'],
                    'familyname' => $row['familyname'],
                    'email' => $row['email'],
                    'phonenumber' => $row['phonenumber'],
                    'password' => $row['password'],
                    'isadmin' => $row['isadmin'],
                    'dateofbirth' => $row['dateofbirth'],
                    'datecreated' => $row['datecreated'],


                );
            }
            $response['data'] = $data;
        } else {
            $response['error'] = "No records found.";
        }
    } catch (Exception $e) {
        $response['error'] = "Could not fetch data: " . $e->getMessage();
    }
} else {
    $response['error'] = "Invalid input";
}

header('Content-Type: application/json');
echo json_encode($response);
?>