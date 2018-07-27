<?php
include 'header.php';
?>
<div class='container'>
<div class='row'>
<div class = 'col-lg-5 col-md-5 col-sm-6 col-xs-12 move'>
<div class = 'main-page'>
<form class = "formm"action = 'routes.php' method='POST'>

<input class='btn color' type ='text' name='userName' placeholder='Username'><br><br>
<input class='btn color'type = 'password' name='password' placeholder='Password'><br><br>
<input class = 'btn color'type='submit' name='page' value='login'>

</form>
</div>
</div>
</div>
</div>
<?php 
if(isset($msg)){
    echo $msg;
}
?>

<?php include 'footer.php';?>