<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: gray">
    <div class="container-fluid">
    <img src="timeline.jpg" height="28" alt="CynicsExtra" >
        <a href="dianne.php" class="navbar-brand">Main</a>
       
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="office.php" class="nav-item nav-link active">Office</a>
                <a href="contact.php" class="nav-item nav-link">Transaction</a>
                <a href="client.php" class="nav-item nav-link">Clients</a>
                <a href="home.php" class="nav-item nav-link" tabindex="-1">Dropdown</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>
</nav>
</body>
</html>
