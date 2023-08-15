<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>PHP PDO CRUD</title>
</head>
<body>
<div class="container">
        <div class="row">
        <div class="col-md-12 mt-4">
            <?php if(isset( $_SESSION['message'])) : ?>
                <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php  endif;?>
            <div class="card">
                <div class="card-header">
                    <h3>PHP PDO CRUD
                    <a href="employee-add.php" class="btn btn-primary">Add employee</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="cod.php" method="POST">
                        <div class="mb-3">
                            <label>Full Name</label>
                           <input type="text" name="fullname" class="form-control" /> 
                        </div>
                        <div class="mb-3">
                            <label>Id</label>
                           <input type="text" name="id" class="form-control" /> 
                        </div>
                        <div class="mb-3">
                            <label>Address</label>
                           <input type="text" name="address" class="form-control" /> 
                        </div>
                        <div class="mb-3">
                            <label>Salary</label>
                           <input type="text" name="salary" class="form-control" /> 
                        </div>
                        <div class="mb-3">
                         <button type="submit" name="save_employee_btn" class="btn btn-primary">Save Employee</button>
                      </div>   
                    </form>
            </div>
        </div>
    </div>
    </div>
   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


