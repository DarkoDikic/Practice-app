<?php
if(!isset($_SESSION['loggedin'])){
    session_start();
}
$loggedin = unserialize($_SESSION['loggedin']);

$imges=isset($imges)?$imges:array();

include 'header.php';
?>

<a class="btn color movee" href="routes.php?page=logout">Log out</a>
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 move">
<div class="main-page">
<h1 class="movee">Pictures</h1>

<p class="btn color btnn movee">Currently logged in as <?php echo $loggedin['userName'];?></p>


<form action='routes.php' method='POST' enctype='multipart/form-data'>
<input  type = "file" name="image" value="Browse" class="btn color movee"><br><br>
<input type="submit" name="page" value="upload" class="btn color move"><br><br>
</form>

<div class = "wrap">
<div id="arrow-left" class="arrow"></div>
<?php if(empty($imges)){?>
       <center> <img class='slide'src='img/default.svg.png' ></center>
<?php }else{?>
<?php foreach($imges as $x){?>

<center><img class="slide" src="img/<?php echo $x['imagename']?>"></center>
<?php }};?>

<div id="arrow-right" class= "arrow"></div>
</div>
</div>
</div>
</div>
</div>

<?php if (isset($msg)){echo $msg;}?>




<?php include 'footer.php';?>