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

$book = $bookManager->getBook($_GET['id']);

foreach($book as $element){
    $picture = $element['picture'];
    $categorie = $element['categories'];
}

if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['categorie']) && !empty($_POST['date']) && !empty($_POST['resume'])){
    $newBook = new Book([
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'date' => $_POST['date'],
        'resume' => $_POST['resume']
    ]);

    $newPicture = new Picture([
        'picture' => $_FILES['picture']['name'],
        'alt' => $_FILES['picture']['name']
    ]);

    $newCategorie = new Categorie([
        'categorie' => $_POST['categorie']
    ]);
    
     $bookManager->updateBook($newBook, $_GET['id']);

     $bookManager->updatePicture($newPicture, $picture);
     move_uploaded_file($_FILES['picture']['tmp_name'], '../assets/img/' . basename($_FILES['picture']['name']));

     $bookManager->updateCategorie($newCategorie, $categorie);
}
include "../views/updateBookVue.php";