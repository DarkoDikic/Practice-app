<?php 

require_once '../model/DAO.php';


class Controller{
    
    
    
    public function login(){
        $userName=isset($_POST['userName'])?$_POST['userName']:"";
        $password=isset($_POST['password'])?$_POST['password']:"";
        
        if(!empty($userName)&&!empty($password)){
            
            $dao= new DAO();
            $user = $dao->getUser($userName, $password);
            
            if($user){
                session_start();
                
                $_SESSION['loggedin'] = serialize($user);
                $_SESSION['time'] = time();
                $loggedin = unserialize($_SESSION['loggedin']);
                $userid = $loggedin['iduser'];
                $msg="Successful login";
                $imges = $dao->selectImage($userid);
                include'content.php';
                
                
            }else{
                $msg="Username/Password missmatch";
                include'login.php';
            }
        
    
    
    
        }else{
            $msg="You need to fill all of the fields";
            include'login.php';
        }
    
    }
   
    
    
    public function showlogin(){
        include 'login.php';
    }
  
   
    
    public function showregister(){
        include 'register.php';
    }
 
  
    
    public function register(){
       
            
        
        $userName=isset($_POST['userName'])?$_POST['userName']:"";
        $password=isset($_POST['password'])?$_POST['password']:"";
        $user_name=isset($_POST['user_name'])?$_POST['user_name']:"";
        $user_lastname=isset($_POST['user_lastname'])?$_POST['user_lastname']:"";
        $user_email=isset($_POST['user_email'])?$_POST['user_email']:"";
        
        
        
        $errors=array();
        
        
        
        if(empty($user_name)){
            $errors['user_name']="You need to type in your First Name";
        
        }
       
       
        
       
        if(empty($user_lastname)){
           $errors['user_lastname'] = "You need to type in your Last Name";
        }
       
       
        
        
        if(empty($user_email)){
            $errors['user_email'] = "You need to type in your Email";
        }else{
            if(filter_var($user_email,FILTER_VALIDATE_EMAIL)){
                
            }else{
                $errors['user_email'] = "It's not valid format of your Email";
            }
        }
        
        
        
        
        if(empty($userName)){
            
           $errors['userName']="You need to type in your Username";
        }
        
        
        
        
        if(empty($password)){
            
            $errors['password'] = "You need to type in your Password";
        }else{
            if($password<=8 && $password>=16){
                $errors['password'] = "Your password need to be more than 8 and less than 16 characters";
            }
        }
        
        
        
        
        
        if(count($errors)==0){
            $dao = new DAO();
            $checkUserName = $dao->checkUser($userName);
            $checkEmail=$dao->checkEmail($user_email);
           
            if($checkUserName){
             $msg = "That Username has already been taken ";
             include 'register.php';
             die;
            }else{
            
            if($checkEmail){
                $msg = "That Email is already in use";
                include 'register.php';
                die;
            }else{
                $dao->registration($userName,$password,$user_name,$user_lastname,$user_email);
                $msg="Registration Completed";
                include 'register.php';
            }
            
        }
      
        }else{
            $msg="You need to fill all fields.";
                include 'register.php';
        }
      
      
    
    }
    
    
    public function uploadImage(){
        if(!isset($_SESSION['loggedin'])){
            session_start();
        }
        $loggedin = unserialize($_SESSION['loggedin']);
       $userid = $loggedin['iduser'];
        $imagename = isset($_POST['imagename'])?$_POST['imagename']:"";
        $img = isset($_POST['image'])?$_POST['image']:"";
        $imag = $_FILES['image']['name'];
        
        $dao = new DAO();
        $upload = $dao->uploadImage($userid, $imag);
       
        if($upload){
            move_uploaded_file($_FILES['image']['tmp_name'], "img/$imag");
            $msg= "Upload Sucessful'";
            
           
            $imges = $dao->selectImage($userid);
            
            include 'content.php';
        }else{
            $msg= "Upload Failed!";
            include 'content.php';
        }
        
        
       
       
    }
    
        
    public function logout(){
        
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_SESSION['loggedin'])){
            $msg="successful logged out user".$_SESSION['loggedin'];
            session_destroy();
            header("Location:../index.php");
        }
    }
    
    
    
    
}