<?php
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


//instance of adminManager
$adminManager = new AdminManager;


//condition for error message
if(isset($_POST['firstname']) || isset($_POST['mail']) || isset($_POST['pass'])){
    //Security data
    $firstname = addslashes(strip_tags($_POST['firstname']));
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $errors = array();
    if(empty($_POST['firstname'])){
        $errors['firstname'] = "Veuillez entrer votre prénom";
    }

    if(preg_match("#^[a-z0-9-._]+@[a-z0-9-._]{2,}\.[a-z]{2,4}$#", $_POST['mail'])) {
        //Security data
        $mail = addslashes(strip_tags($_POST['mail']));
    }else{
        $errors['mail'] = "Veuillez entrer une adresse mail valide";
    }

    if(empty($_POST['pass'])){
        $errors['pass'] = "veuillez entrer votre mot de passe";
    }

    //if $errors = NULL we create an object admin
    if(empty($errors)){
        $admin = new Admin([
            'firstname'=> $firstname,
            'mail' => $mail,
            'pass' => $pass
        ]);
        //if admin is exist
        if($adminManager->adminExist($admin)){
            $errors['exist'] = "Ce pseudo ou ce mail est déja utilisé";
        }else{
        // If not exist, add admin object
        $adminManager->addAdmin($admin);
        header('Location: index.php');
        }

    }
    
}
include "../views/registerVue.php";

?>