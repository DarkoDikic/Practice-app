<?php
require_once '../config/db.php';

class DAO{
  private  $db;
  
  private $GET_USER = "SELECT * FROM user WHERE userName=? and password=?";
  private $CHECK_EMAIL="SELECT * FROM user WHERE user_email=:user_email";
  private $CHECK_USERNAME="SELECT * FROM user WHERE userName=?";
  private $REGISTRATION="INSERT INTO `user`( `userName`, `password`, `user_name`, `user_lastname`, `user_email`) VALUES (?,?,?,?,?)";
  private $INSERT_IMAGE = "INSERT INTO `immage`(`iduser`,`imagename`) VALUES (?,?)";
  private $SELECT_IMAGE = "SELECT * FROM immage WHERE iduser=?";
    public function __construct(){
        
       $this->db = DB::createInstance();
        
    }
    
    
    public function getUser($userName,$password){
        $statement=$this->db->prepare($this->GET_USER);
        $statement->bindValue(1,$userName);
        $statement->bindValue(2,$password);
        
        $statement->execute();
        $result=$statement->fetch();
        
        return $result;
    }
    
    public function checkUser($userName){
        $statement=$this->db->prepare($this->CHECK_USERNAME);
        $statement->bindValue(1,$userName);
        $statement->execute();
        
        if($statement->rowCount()){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
    
    public function checkEmail($user_email){
        $statement =$this-> db->prepare($this->CHECK_EMAIL);
       $params = array(':user_email'=>$user_email);
        $statement->execute($params);
        if($statement->rowCount()){
            return TRUE;
        }else{
            return FALSE;
        }
       
    }
    
    public function registration($userName,$password,$user_name,$user_lastname,$user_email){
        
        $statement = $this->db->prepare($this->REGISTRATION);
        $statement->bindValue(1,$userName);
        $statement->bindValue(2,$password);
        $statement->bindValue(3,$user_name);
        $statement->bindValue(4,$user_lastname);
        $statement->bindValue(5,$user_email);
        
        $statement->execute();
        
    }
    
    public function uploadImage($userId,$imageName){
        
        $statement=$this->db->prepare($this->INSERT_IMAGE);
        $statement->bindValue(1,$userId);
        $statement->bindValue(2,$imageName);
        
        $statement->execute();
        
        if($statement->rowCount()){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }
    
    public function selectImage($userid){
        $statement = $this->db->prepare($this->SELECT_IMAGE);
        $statement->bindValue(1,$userid);
        $statement->execute();
        
        $result = $statement->fetchAll();
        return $result;
        
    }
    
}