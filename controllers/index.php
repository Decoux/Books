<?php
session_start(); 
// On enregistre notre autoload.
function chargerClasse($classname)
{
    if (file_exists('../models/' . $classname . '.php')) {
        require '../models/' . $classname . '.php';
    } else {
        require '../entities/' . $classname . '.php';
    }
}
spl_autoload_register('chargerClasse');

$adminManager = new AdminManager;


if(isset($_POST['mail']) || isset($_POST['pass'])){
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $errors = array();
    if(empty($_POST['mail'])){
        $errors['mail'] = "veuillez renseigner votre adresse mail";
    }

    if(empty($_POST['pass'])){
        $errors['pass'] = "veuillez renseigner votre mot de passe";
    }

    if (preg_match("#^[a-z0-9-._]+@[a-z0-9-._]{2,}\.[a-z]{2,4}$#", $_POST['mail'])) {
        //Security data
        $mail = addslashes(strip_tags($_POST['mail']));
    } else {
        $errors['mail'] = "Veuillez entrer une adresse mail valide";
    }

    if(empty($errors)){
        $admin = new Admin([
            'mail' => $mail,
            'pass' => $pass
        ]);
        if($adminManager->adminExist($admin)==NULL){
            $errors['no-exist'] = "Veuillez vous inscrire";
        }else{
            $verifyAdmin = $adminManager->adminExist($admin);
            if(password_verify($_POST['pass'], $verifyAdmin->getPass())){
                
    
                $_SESSION['id'] = $verifyAdmin->getId();
            }
        }
        
    }
    
}

if(isset($_SESSION['id'])){
    header('Location: books.php');
}


include "../views/indexVue.php";

 ?>
