<?php
include "config.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $client=$_POST['clients'];
    $sql= "INSERT INTO `client`(`id`,`clients`) VALUES 
    ('$id','$client')";
    $result= $conn->query($sql);
    if($result == TRUE)
    {
        header('Location: dianne.php');
    }
    else
    {
        echo "error." .$sql. "<br>".$conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="custom.css" rel="stylesheet" type="text/css">
<title>STUDENT INFORMATION</title>
  </head>
  <body>
  <?php include 'navbar.php'?>
    <div class="container mt-2" >
      <div class="row">
         <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <h4>Add Client</h4>
               </div>
               <div class="card-body">
                <form action="" method="POST">
                <div class="mb-3">
                <label>ID Number:</label>
                    <input type="text" name="id" class="form-control">
                    </div>
                <div class="mb-3">
                <label>Client:</label>
                    <input type="text" name="clients" class="form-control">
                    </div>
                    <div class="mb-3">
                   <button type="submit" name="submit" class="btn btn-primary">Save</button>
                   <a href="dianne.php" class= "btn btn-danger float-end">Back</a>
                    </div>
                    </div>
          </div>
        </div>
     </div>
    </div>  
  </body>
</html>