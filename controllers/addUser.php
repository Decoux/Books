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

$userManager = new UserManager;

if(isset($_POST['name']) || isset($_POST['firstname'])){
    $errors = array();
    if(empty($_POST['name'])){
        $errors['name'] = "Veuillez renseigner votre nom.";
    }
    if(empty($_POST['firstname'])){
        $errors['firstname'] = "Veuillez renseigner votre prénom.";
    }

    if(empty($errors)){
        $name = addslashes(strip_tags($_POST['name']));
        $firstname = addslashes(strip_tags($_POST['firstname']));
        
        $bytes = random_bytes(4);
        $identifiant = bin2hex($bytes);
        

        $user = new User([
            'name' => $name,
            'firstname' => $firstname,
            'identifiant' => $identifiant,
            
        ]);

        $userManager->addUser($user);
        header('Location: users.php');
    }
}
include "../views/addUserVue.php";