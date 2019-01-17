<?php
include("template/header.php")
?>
 
  <section class="container">
    <h2 class="my-5 text-center">Details Utilisateur</h2>
    
    <p class="text-center">Nom : <?php echo $user->getName(); ?></p>
    <p class="text-center">Prénom : <?php echo $user->getFirstname(); ?></p>
    <p class="text-center">Identifiant : <?php echo $user->getIdentifiant(); ?></p>
    <?php if($user->getId_book_borrow() != null){ ?>
      <?php foreach($bookBorrow as $element){ ?>
        <p class="text-center">Nom du livre emprunté : <?php echo $element['book']->getTitle(); ?></p>
      <?php } ?>
    <?php } ?>
      <div class="d-flex justify-content-center">
        <a class="btn btn-info" href="updateUser.php?id=<?php echo $_GET['id']; ?>"><input class="btn" type="submit" value="Modifier"></a>
      </div>
    


  </section>

  <?php
    include("template/footer.php")
    ?>