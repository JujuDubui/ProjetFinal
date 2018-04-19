<?php
if(!empty($_POST))
{
    if(!empty($_POST['login']) AND !empty($_POST['password']) AND !empty($_POST['confpassword']) AND !empty($_POST['email']) AND !empty($_POST['adresse']) AND !empty($_POST['datenaiss']))
    {
        $login = htmlspecialchars($_POST['login']);
        $passw = md5($_POST['password']);
        $confpassw = md5($_POST['confpassword']);
        $mail = htmlspecialchars($_POST['email']);
        $adress = htmlspecialchars($_POST['adresse']);
        $datenaiss = $_POST['datenaiss'];
        $logexist = logExist($login);
        if($passw==$confpassw)
        {
            if(strlen($login) > 17 AND strlen($passw) > 17)
            {
                $errorMessage = "Votre pseudo / password ne doivent pas dépasser les 16 caractères";
            }
            else
            {
                if($logexist==1)
                {
                    $errorMessage = "Votre pseudo est déjà pris";
                }
                else{
                      $mailexist = mailExist($mail);
                      if($mailexist==0){
                          try{
                              $req = addUser($login, $passw, $mail, $adress, $datenaiss);
                              $errorMessage = "Votre compte a bien été créé ! vous pouvez vous connecter <a href='connexion'>ici</a>";
                          }
                          catch (Exception $e){
                              $errorMessage = "Une erreur c'est produite.";
                          }
                      }
                      else{
                        $errorMessage="Cette adresse mail est deja utilisée";
                        }
                  }
              }
        }
        else{
          $errorMessage = "les mots de passe ne correspondent pas";
        }
    }
    else
    {
        $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
}
?>
