<?php
include 'header.php';
$userName=isset($_POST['userName'])?$_POST['userName']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$user_name=isset($_POST['user_name'])?$_POST['user_name']:"";
$user_lastname=isset($_POST['user_lastname'])?$_POST['user_lastname']:"";
$user_email=isset($_POST['user_email'])?$_POST['user_email']:"";

?>
<div class="container pl-5">
<div class="row">
<div class="col-lg-7 col-md-5 col-sm-6 col-xs-12 move">
<div class ="main-page">
<form action ='routes.php' method='POST'>

<input class="btn color movee" type='text' name='userName' placeholder ='Username' value="<?php echo $userName;?>">
<?php echo "<span style='color:red'>*</span> ";
if(isset($errors['userName'])){
    echo "<span class='btn btn-danger move'>". $errors['userName']."</span>";
}?><br><br>

<input class=" btn color movee" type='password' name='password' placeholder = 'Password'value="<?php echo $password;?>">
<?php echo "<span style='color:red'>*</span>"; if(isset($errors['password'])){
    echo "<span class='btn btn-danger move'>". $errors['password']."</span>";
}?><br><br>

<input class="btn color movee" type='text' name='user_name' placeholder='Name'value="<?php echo $user_name;?>">
<?php echo "<span style='color:red'>*</span>"; if(isset($errors['user_name'])){
    echo "<span class='btn btn-danger move'>". $errors['user_name']."</span>";
}?><br><br>

<input class="btn color movee" type='text' name='user_lastname' placeholder='Last Name' value="<?php echo $user_lastname;?>">
<?php echo "<span style='color:red'> *</span> "; if (isset($errors['user_lastname'])){
    echo  "<span class='btn btn-danger move'>". $errors['user_lastname']."</span>";
                        
}?><br><br>

<input class="btn color movee" type='text' name='user_email' placeholder = 'Email'value="<?php echo $user_email;?>">
<?php echo "<span style='color:red'>*</span>"; if (isset($errors['user_email'])){
                        echo "<span class='btn btn-danger move'>". $errors['user_email']."</span>";
}?><br><br>
<input class = "btn color movee" type ='submit' name='page' value='register'>
</form>
</div>
</div>
</div>
</div>


<?php if(isset($msg)){echo "<span class='btn btn-danger move'style='margin-left:auto;margin-right:auto;'>". $msg."</span>";}?>
<?php include 'footer.php';?>