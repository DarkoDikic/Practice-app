<?php
if(isset($_SESSION['loggedin'])){
    include 'content.php';
}
include 'view/header.php';
?>
<html>
<head>
<title>Practice Web</title>
<link rel="stylesheet" type="text/css" href="view/css/style.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap.css">
</head>
<body style="background-color: #57EEEE">
<center>
<div class="container pl-5">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 move">
<div class ="main-page">
<h1 >Welcome</h1>
</div>
<div class = " pb-4 pt-4" >
<a href="view/routes.php?page=showlogin" class="btn color">Log in</a>
<a href="view/routes.php?page=showregister" class="btn color">Register</a>
</div>
</div>
</div>
</div>
</center>
</body>
<script src=view/js/simple.js type="text/javascript"></script>
</html>
<?php 
include 'view/footer.php';

?>