<?php
session_start();
if(isset($_POST)){
    if(!empty($_POST['login']) && !isset($_POST['login_admin']) && !empty($_POST['msg'])){
        require('models/bdd.php');
        require('models/requetes.php');
        $bdd = db_connect();
        $login = htmlspecialchars($_POST['login']);
        $msg = htmlspecialchars($_POST['msg']);
        $infuser = getUser($login);
        if(!empty($infuser)){
          $idclient=intval($infuser['id_client']);
          $req = addMsg($login, $msg, $idclient);
          header("location:help");
          }
      }
      else if(!empty($_POST['login_admin']) && !empty($_POST['login']) && !empty($_POST['msg'])){
          require('models/bdd.php');
          require('models/requetes.php');
          $bdd = db_connect();
          $logadmin = htmlspecialchars($_POST['login_admin']);
          $msg = htmlspecialchars($_POST['msg']);
          $login = htmlspecialchars($_POST['login']);
          $infuser = getUser($login);
          if(!empty($infuser)){
            $idclient=intval($infuser['id_client']);
            $req = addAdminMsg($logadmin, $msg, $idclient);
            $_SESSION['login'] = $_POST['login'];
            header("location:helpadmin");
            }
        }
      else{
          $errorMessage = "Error";
        }
  }
  else{
    $errorMessage="veuillez remplir les champs";
  }
?>
