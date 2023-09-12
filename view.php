<?php 
include "config.php";
$sql ="SELECT client.id,client.clients,office.offices, transaction.location FROM client INNER JOIN office ON client.id = office.id INNER JOIN transaction ON office.id=transaction.id";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Records</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="con" class="container mt-2">
        <div class="row">
            <div class="col md-12">
            <div class="card">
            <div class="card-header" id="ch">
            <h4>Records
                <a href="view.php" class= "btn btn-primary float-end">Back</a>
                </h4>
                </div>
            <div  id="cb" class="card-body">

        <table class="table table-bordered table-striped tabel-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Client</th>
        <th>Office</th>
        <th>Transactions</th>
        </tr>
    </thead>
    <tbody> 
        <?php
         if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
    ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['clients']; ?></td>
                <td><?php echo $row['offices']; ?></td>
                <td><?php echo $row['location']; ?></td>
    
               
               </tr>                       
    <?php       }
        }
    ?>                
</tbody>
</table>
</div> 
</body>
</html>