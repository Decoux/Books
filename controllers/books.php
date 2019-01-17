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

$bookManager = new BookManager;

if($bookManager->getBooks()!=NULL){
    $books = $bookManager->getBooks();
}



include "../views/booksVue.php";