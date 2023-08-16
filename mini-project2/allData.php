<?php

require "dbcon.php"; 

$response = array();

try {
    $sql = "SELECT * FROM register";
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
            );
        }
        $response['data'] = $data;
    } else {
        $response['error'] = "No records found.";
    }
} catch (Exception $e) {
    $response['error'] = "Could not fetch data: " . $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode($response);
?>