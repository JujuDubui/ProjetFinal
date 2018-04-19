<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
         $getUser=getUser($_POST['loginconnect']);
         $getAdmin=getAdmin($_POST['loginconnect']);
         if(!empty($getUser)){
            $password=md5($_POST['mdpconnect']);
            if($getUser['passw']==$password){
                session_start();
                $_SESSION['login'] = $getUser['login'];
                $_SESSION['id'] = $getUser['id_client'];
                header('Location: accueil');
            }
            else {
                $errorMessage="mot de passe incorrect";
            }
         }
         else if(!empty($getAdmin)){
           $password=md5($_POST['mdpconnect']);
           if($getAdmin['passw']==$password) {
               session_start();
               $_SESSION['login_admin'] = $getAdmin['login'];
               $_SESSION['id_admin'] = $getAdmin['id_admin'];
               header('Location: accueil');
           }
           else{
             $errorMessage="mot de passe incorrect";
           }
         }
 }
?>
