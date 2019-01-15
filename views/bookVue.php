<?php
include("template/header.php")
?>
 
  <section class="container">
    <?php foreach($book as $element){ ?>
      <div class="row">
        <div class="mt-3 col-md-6"><img class="col-12" src="../assets/img/<?php if($element['picture']->getPicture()==NULL){ echo 'dark-blue-book-background.jpg'; }else{ echo $element['picture']->getPicture(); ?>" alt="<?php echo $element['picture']->getAlt(); } ?>"></div>
        <div class="col-md-6">
        <div class="d-flex mt-3">  
          <p class="mx-auto">Titre : <br /><?php echo $element['book']->getTitle(); ?></p>
          <p class="mx-auto">Auteur : <br /><?php echo $element['book']->getAuthor(); ?></p>
          <p>Categorie : <br /><?php echo $element['categories']->getCategorie(); ?></p>
          <p class="mx-auto">Date de parution : <br /><?php echo $element['book']->getDate(); ?></p>
        </div>
        <div class="text-wrap text-truncate mt-5">
          <p>Résumé : <?php echo $element['book']->getResume(); ?></p>
        </div>
        <div class="mt-5 d-flex justify-content-around">
          <a href="deleteBook.php?id=<?php echo $element['book']->getId_books(); ?>"><input type="submit" class="btn btn-danger" value="Supprimer"></a>
          <a href="updateBook.php?id=<?php echo $element['book']->getId_books(); ?>"><input type="submit" class="btn btn-info" value="Modifier"></a>
          <a href="borrowBook.php"><input type="submit" class="btn btn-warning" value="Empreinter"></a>
          <a href="returnBook.php"><input type="submit" class="btn btn-dark" value="Restituer"></a>
        </div>
      </div>
      </div> 
      <?php } ?>
  </section>
    

 <?php
include("template/footer.php");
?>