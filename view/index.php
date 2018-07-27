<?php
if(isset($_SESSION['loggedin'])){
    include 'content.php';
}
include 'header.php';
?>

<center>
<div class="container pl-5">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 move">
<div class ="main-page">
<h1 >Welcome</h1>
</div>
<div class = " pb-4 pt-4" >
<a href="routes.php?page=showlogin" class="btn color">Log in</a>
<a href="routes.php?page=showregister" class="btn color">Register</a>
</div>
</div>
</div>
</div>
</center>
<?php 
include 'footer.php';

?>