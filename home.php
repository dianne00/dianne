<?php
include "config.php";
if(isset($_POST['submit']))
{
    $client=$_POST['clients'];
    $office=$_POST['offices'];
    $loc=$_POST['location'];
    $rating=$_POST['ratings'];
    $service=$_POST['services'];
    $sql= "INSERT INTO `ratings`(`clients`,`offices`,`location`,`ratings`,`services`) VALUES 
    ('$client','$office', '$loc','$rating','$service')";
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
<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, inital-scale=1">
<title>Feedback</title>
  </head>
  <body>
    <div class="container-fluid p-0">
    <?php include 'navbar.php'?>
    <div class="container mt-2" >
      <div class="row">
         <div class="col-md-12">
          <div class="card">
            <div class="card-header">
    <H1> DROPDOWN FORM</H1></div>

    <?php
 include ('fetch_client.php');
?>
 <div class="card-body">
 <form action="home.php" method="POST">
    <div class="mb-3">
    <label for ="clients">Clients</label>
<select id ="client" name="clients" class="form-control">
    <option>Client Type</option>
    <?php
    foreach($option as $option)
    {
        ?>
        <option><?php echo $option['clients'];?></option>
        <?php
    }
    ?>
    </select></div>
    
<?php
 include ('fetch.php');
?>
   
    <div class="mb-3">
    <label for ="offices">Offices</label>
<select id ="office" name="offices" class="form-control">
    <option >Select Office Area</option>
    <?php
    foreach($option as $option)
    {
        ?>
        <option><?php echo $option['offices'];?></option>
        <?php
    }
    ?>

    </select></div>
    <?php
 include ('fetch_transac.php');
?>
   
    <div class="mb-3">
    <label for ="location">Transaction</label>
<select id ="location" name="location" class="form-control">
    <option>Transaction</option>
    <?php
    foreach($option as $option)
    {
        ?>
        <option><?php echo $option['location'];?></option>
        <?php
    }
    ?>
    </select></div>
    <div  id="line">
<table class="table">
	<thead>
		<tr>
			<th>Rating</th>
			<th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Overall Service</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="ratings" id="" value="Outstanding">
					<label class="form-check-label" for="rating1">
					</label>
                </td>
					<td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="ratings" id="" value="Very Good">
					<label class="form-check-label" for="rating2">
					</label></td>
				</div>
                <td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="ratings" id="" value="Good">
					<label class="form-check-label" for="rating3">
					</label>	</td>
				</div>
                <td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="ratings" id="" value="Fair">
					<label class="form-check-label" for="rating4">
						
					</label>	</td>
				</div>
                <td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="ratings" id="" value="Poor">
					<label class="form-check-label" for="rating5">
					</label></td>
				</div>
			</td>
		</tr>
        <tr>
			<td>Overall Service</td>
			<td>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="services" id="" value="Outstanding">
					<label class="form-check-label" for="rating1">
					</label>
                </td>
					<td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="services" id="" value="Very Good">
					<label class="form-check-label" for="rating2">
					</label></td>
				</div>
                <td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="services" id="" value="Good">
					<label class="form-check-label" for="rating3">
					</label>	</td>
				</div>
                <td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="services" id="" value="Fair">
					<label class="form-check-label" for="rating4">
						
					</label>	</td>
				</div>
                <td><div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="services" id="" value="Poor">
					<label class="form-check-label" for="rating5">
					</label></td>
				</div>
			</td>
</tr>
        <tr>
            <td>
        <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div></td></tr>
</div>
</body>
</html>