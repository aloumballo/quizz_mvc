<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php"); 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(isset($_REQUEST['action'])){
         if($_REQUEST['action']=="connexion"){
             $login=$_POST['login'];
             $password=$_POST['login'];
             connexion($login,$password);
              
         }
     }

 }
 if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
             
        }
    }else {
      
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");      
    }
}
    //US1
    function connexion(string $login,string $password):void{
        $errors=[];
         champ_obligatoire('login',$login,$errors,"login obligatoire");
         if(count($errors)==0){
             valid_email('login',$login,$errors);
         }
         champ_obligatoire('password',$password,$errors,);
         if(count($errors)==0){
             //l'appel de la fonction du model
            $user=find_user_login_password($login,$password);
            //Utilisateurs existe car TB n'est pas vide
            if(count($user)!=0){
                $_SESSION["KEY_USER_CONNECT"]=user;
                //?controller=user&action=accueil
                header("location:".WEB_ROOT."?controller=user&action=accueil");
                exit();

            }else{
                //Utilisateurs n'existe car TB est pas vide
                $errors['connexion']="login ou le mot de passe incorrect";
                $_SESSION['errors']=$errors;
                header("location:".WEB_ROOT);
                exit(); 
  

            }
            
        }else{
            $_SESSION[KEY_ERRORS]=$errors;
             header("location:".WEB_ROOT);
              exit(); 

           /*  require_once(PATH); */

        }
        
    }
    
    
     
