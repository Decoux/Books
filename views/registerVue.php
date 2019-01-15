<?php
  include("template/header.php")
 ?>
 
  <section class="container">
    <form class="mt-5 px-3 py-5 border border-light d-flex flex-column" action="register.php" method="post">
      <p class="text-center">Formulaire d'inscription</p>
      <label for="name">Prénom : </label>
      <?php if (isset($errors['firstname'])) { ?><div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"><?php echo $errors['firstname']; } ?></div>
      <input name="firstname" class="form)-control" type="text" placeholder="Entrez votre prénom">
      <label for="name">Mail : </label>
      <?php if (isset($errors['mail']) || isset($errors['exist'])) { ?><div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"><?php if($errors['mail']){ echo $errors['mail']; }elseif($errors['exist']){ echo $errors['exist']; }} ?></div>
      <input name="mail" class="form-control" type="text" placeholder="Entrez votre Email">
      <label for="name">Pass : </label>
      <?php if (isset($errors['pass'])) { ?><div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"><?php echo $errors['pass'];  } ?></div>
      <input name="pass" class="form-control" type="text" placeholder="Entrez votre mot de passe">
      <button type="submit" class="mt-3 btn btn-info">S'inscrire</button>
      <a class="" href="index.php">
          <input class="col-12 mt-3 btn btn-success" type="button" value="Se connecter">
      </a>
    </form>
  </section>


 <?php
   include("template/footer.php")
  ?>
