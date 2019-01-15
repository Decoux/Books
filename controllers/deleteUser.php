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

$users = $userManager->getUsers();

if(isset($_POST['identifiant'])){
    
    $userManager->deleteUser($_POST['identifiant']);
    header('Location: users.php');
}


include "../views/deleteUserVue.php";