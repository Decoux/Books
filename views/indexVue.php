<?php
include("template/header.php")
?>
 
  <section class="container">
    <form class="mt-5 px-3 py-5 border border-light d-flex flex-column" action="index.php" method="post">
      <p class="text-center">Formulaire de connexion</p>
      <label for="name">Mail : </label>
      <?php if(isset($errors['mail'])){ ?><div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"> <?php echo $errors['mail']; }?></div>
      <input name="mail" class="form-control" type="text" placeholder="Entrez votre Email">
      <label for="name">Pass : </label>
      <?php if(isset($errors['pass'])){ ?><div class="bg-danger p-1 rounded my-1 text-white font-weight-bold"><?php echo $errors['pass'];  } ?></div>
      <input name="pass" class="form-control" type="text" placeholder="Entrez votre mot de passe">
      <button type="submit" class="mt-3 btn btn-success">Se connecter</button>
      <a class="" href="register.php">
          <input class="col-12 mt-3 btn btn-info" type="button" value="S'inscrire">
      </a>
    </form>
  </section>


 <?php
include("template/footer.php")
?>