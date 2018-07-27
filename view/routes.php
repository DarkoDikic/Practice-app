<?php
require_once '../controller/Controller.php';

$controller = new Controller();


if($_SERVER['REQUEST_METHOD']==='POST'){
    $page = $_POST['page'];
    
    switch ($page){
        case 'login':
            $controller->login();
            break;
            
        case 'register':
            $controller->register();
            break;
        case 'upload':
            $controller->uploadImage();
            break;
    }
    
 
}else{
    
    $page = $_GET['page'];
    
    switch($page){
        
        case'showlogin':
            
            $controller->showlogin();
            break;
        case'showregister':
            $controller->showregister();
            break;
            
        case 'logout':
            $controller->logout();
            break;
        
        
    }
}