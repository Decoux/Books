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
$bookManager = New BookManager;

$user = $userManager->getUser($_GET['id']);
if($user->getId_book_borrow()!=NULL){
    $bookBorrow = $bookManager->getBook($user->getId_book_borrow());
}





include "../views/userDetailsVue.php";