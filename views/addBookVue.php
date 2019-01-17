<?php
include("template/header.php")
?>
 
  <section class="container">
    <form class="mt-5 d-flex flex-column col-md-6 mx-auto" action="addBook.php" method="post" enctype="multipart/form-data">
        <p class="text-center">Ajouter un livre</p>
        <label for="title">Titre : </label>
        <?php if(isset($errors['title'])){ ?> <div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"> <?php echo $errors['title']; } ?></div>
        <input class="form-control" name="title" type="text" placeholder="Titre du livre">
        <label for="author">Auteur : </label>
        <?php if(isset($errors['author'])){ ?> <div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"> <?php echo $errors['author']; } ?></div>
        <input class="form-control" name="author" type="text" placeholder="Auteur du livre">
        <label for="categorie">Categorie : </label>
        <?php if(isset($errors['categorie'])){ ?> <div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"> <?php echo $errors['categorie']; } ?></div>
        <select class="form-control" name="categorie" id="">
            <option type="text" selected disabled>Categorie</option>
            <option value="Science-fiction">Science-fiction</option>
            <option value="Thriller">Thriller</option>
            <option value="Horror">Horreur</option>
            <option value="Roman">Roman</option>
        </select>
        <label for="picture">Couverture : </label>
        <input name="picture" type="file" value="Couverture">
        <label for="date">Date du livre : </label>
        <?php if(isset($errors['date'])){ ?> <div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"> <?php echo $errors['date']; } ?></div>
        <input class="form-control" name="date" type="date">
        <label for="resume">Résumé : </label>
        <?php if(isset($errors['resume'])){ ?> <div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"> <?php echo $errors['resume']; } ?></div>
        <textarea class="form-control" name="resume" id="" cols="30" rows="10"></textarea>
        <button class="mt-3 mb-5 btn btn-success" type="submit">Enregister</button>
    </form>
  </section>


 <?php
include("template/footer.php")
?>