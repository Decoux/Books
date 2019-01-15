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

$pictureManager = new PictureManager;
$categorieManager = new CategorieManager;
$bookManager = new BookManager;



if(isset($_POST['title']) || isset($_POST['author']) || isset($_POST['date']) || isset($_POST['resume']) || isset($_POST['categorie'])) {
    $title = addslashes(strip_tags($_POST['title']));
    $author = addslashes(strip_tags($_POST['author']));
    $resume = addslashes(strip_tags($_POST['resume']));
    $picture = addslashes(strip_tags($_FILES['picture']['name']));
    $errors = array();
    if(empty($_POST['title'])){
        $errors['title'] = "Veuillez renseigner le titre du livre";
    }
    if(empty($_POST['author'])){
        $errors['author'] = "Veuillez renseigner l'auteur du livre";
    }
    if(empty($_POST['date'])){
        $errors['date'] = "Veuillez renseigner la date de publication du livre";
    }
    if(empty($_POST['resume'])){
        $errors['resume'] = "Veuillez renseigner le résumé du livre";
    }
    if(empty($_POST['categorie'])){
        $errors['categorie'] = "Veuillez renseigner la categorie du livre";
    }
    if(empty($errors)){
        //object picture
        $picture = new Picture([
            "picture" => $picture,
            "alt" => $picture
        ]);
        // insert in db and get last id
        $pictureManager->addPicture($picture);
        $pictureLast = $pictureManager->getLastPicture();
        move_uploaded_file($_FILES['picture']['tmp_name'], '../assets/img/' . basename($_FILES['picture']['name']));
        // object categorie
        $categorie = new Categorie([
            "categorie" => $_POST['categorie']

        ]);
         $categorieManager->addCategorie($categorie);
         $categorieLast = $categorieManager->getLastCategorie();

        //object book
        $book = new Book([
            "title" => $title,
            "author" => $author,
            "date" => $_POST['date'],
            "resume" => $resume,
            "picture_id" => $pictureLast->getId_picture(),
            "books_categorie_id" => $categorieLast->getId_categorie()
        ]);
        
        $bookManager->addBook($book);
        header('Location: books.php');
    }
}
include "../views/addBookVue.php";