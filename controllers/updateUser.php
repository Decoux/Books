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
if(!empty($_POST['name']) && !empty($_POST['firstname'])){
    $user = new User([
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname']
    ]);
    $userManager->updateUser($_GET['id'], $user);
    header('Location: users.php');
}


include "../views/updateUserVue.php";