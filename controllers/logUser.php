<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
         $getUser=getUser($_POST['loginconnect']);
         $getAdmin=getAdmin($_POST['loginconnect']);
         if(!empty($getUser)){
            $password=md5($_POST['mdpconnect']);
            if($getUser['passw']==$password){
                $id = $getUser['id_client'];
                $etat = 1;
                Statut($etat,$id);
                session_start();
                $_SESSION['login'] = $getUser['login'];
                $_SESSION['id'] = $id;
                header("Location:accueil");
            }
            else {
                $errorMessage="mot de passe incorrect";
            }
         }
         else if(!empty($getAdmin)){
           $password=md5($_POST['mdpconnect']);
           if($getAdmin['passw']==$password) {
                $id = $getAdmin['id_admin'];
                $etat = 1;
                StatutAdmin($etat,$id);
                session_start();
                $_SESSION['login_admin'] = $getAdmin['login'];
                $_SESSION['id_admin'] = $getAdmin['id_admin'];
                header("Location:accueil");
           }
           else{
             $errorMessage="mot de passe incorrect";
           }
         }
 }
?>
