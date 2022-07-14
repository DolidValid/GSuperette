<?php
include_once('../model/connexion_sql.php');

include_once('../model/model_login.php');

if(isset($_POST['Username'])){
  
   
        
     $user =new user();
    
     $a = $user->login($bdd,$_POST['Username'],$_POST['password']);
    
           //les sessions nous permette d'accéder (fetch ) de page en 
           if($a){
            session_start();
            
            $_SESSION['logged_in'] = true;
                      
            header("Location: http://localhost/extincteur/controller/controller_page_acc.php");
            die();
           

          }else{
      include_once('../views/view_login.php');
      
          }
          
    }else{
      include_once('../views/view_login.php');
    }
  

