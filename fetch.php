
<?php
include ('config.php');
$query="SELECT offices FROM office";
$result = $conn->query($query);
if($result -> num_rows>0)
{
    $option=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
?>