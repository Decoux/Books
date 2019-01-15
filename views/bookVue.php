<?php
include("template/header.php")
?>
 
  <section class="container">
    <?php foreach($book as $element){ ?>
      <div class="row">
        <div class="mt-3 mb-3 col-md-6"><img class="col-12" src="../assets/img/<?php if($element['picture']->getPicture()==NULL){ echo 'dark-blue-book-background.jpg'; }else{ echo $element['picture']->getPicture(); ?>" alt="<?php echo $element['picture']->getAlt(); } ?>"></div>
        <div class="col-md-6">
        <div class="mt-5 accordion">
          <h4 class="d-flex justify-content-between my-4 text-info">Titre<i class="far fa-eye"></i></h4>
          <p><?php echo $element['book']->getTitle(); ?></p>
          <h4 class="d-flex justify-content-between my-4 text-info">Auteur<i class="far fa-eye"></i></h4>
          <p><?php echo $element['book']->getAuthor(); ?></p>
          <h4 class="d-flex justify-content-between my-4 text-info">Categorie<i class="far fa-eye"></i></h4>
          <p><?php echo $element['categories']->getCategorie(); ?></p>
          <h4 class="d-flex justify-content-between my-4 text-info">Date de parution<i class="far fa-eye"></i></h4>
          <p><?php echo $element['book']->getDate(); ?></p>
          <h4 class="d-flex justify-content-between my-4 text-info">Resumé<i class="far fa-eye"></i></h4>
          <p><?php echo $element['book']->getResume(); ?></p>
        </div>
        <div class="d-flex flex-column mt-5 mb-5 ">
          <a class="col-12 my-2" href="deleteBook.php?id=<?php echo $element['book']->getId_books(); ?>"><input type="submit" class="col-12 btn btn-danger" value="Supprimer"></a>
          <a class="col-12 my-2" href="updateBook.php?id=<?php echo $element['book']->getId_books(); ?>"><input type="submit" class="col-12 btn btn-info" value="Modifier"></a>
          <a class="col-12 my-2" href="borrowBook.php"><input type="submit" class="btn btn-warning col-12" value="Empreinter"></a>
          <a class="col-12 my-2" href="returnBook.php"><input type="submit" class="btn btn-dark col-12" value="Restituer"></a>
        </div>
      </div>
      </div> 

      <?php } ?>
  </section>
    

 <?php
include("template/footer.php");
?>