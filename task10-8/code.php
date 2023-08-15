<?php
session_start();
include('dbcon.php');
if(isset($_POST['save_employee_btn']))
{
$fullname = $_POST['fullname'];
$id = $_POST['id'];
$address = $_POST['address'];
$salary = $_POST['salary'];

$query = "INSERT INTO employees (fullname, id, address, salary) VALUES (:fullname, :id, :adress, :salary)";
$query_run = $conn->prepare($query);

$data = [
   ':fullname' => $fullname,
   ':id' => $id,
   ':adress' => $address,
   ':salary' => $salary,
];
$query_executed = $query_run->execute($data);
if($query_executed)
{
$_SESSION['message'] = "Inserted Successfully";
header('Location: task10.php');
exit(0);
}
else
{
    $_SESSION['message'] = "Not Inserted";
    header('Location: task10.php');
    exit(0);
}

}

?>