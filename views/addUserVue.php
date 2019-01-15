<?php
include("template/header.php")
?>
 
  <section class="container">
    <form class="mt-5 d-flex flex-column" action="addUser.php" method="post">
      <p class="text-center">Ajouter un utilisateur</p>
        <label for="name">Nom : </label>
        <?php if(isset($errors['name'])){ ?> <div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"><?php echo $errors['name']; } ?></div>
        <input class="form-control" type="text" name="name" placeholder="Nom">
        <label for="firstname">Prénom : </label>
        <?php if(isset($errors['firstname'])){ ?> <div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"> <?php echo $errors['firstname']; } ?> </div>
        <input class="form-control" type="text" name="firstname" placeholder="Prénom">
        <button class="btn btn-success mt-3">Enregistrer</button>
    </form>
  </section>


 <?php
include("template/footer.php")
?>