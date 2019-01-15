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
$bookManager = new BookManager;

$users = $userManager->getUsers();
$books = $bookManager->getBooks();

if (!empty($_POST['user']) && !empty($_POST['book'])) {
    $userManager->borrowReturnBook($_POST['user'], NULL);
}

include "../views/returnBookVue.php";