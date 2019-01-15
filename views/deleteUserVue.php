<?php
include("template/header.php")
?>
 
  <section class="container">
    <form action="deleteUser.php" method="post">
      <div class="input-group mb-3">
        <select name="identifiant" class="custom-select" id="inputGroupSelect02">
            <option selected>Choose...</option>
       
    <?php foreach ($users as $user) { ?>
      <option value="<?php echo $user->getIdentifiant(); ?>"><?php echo $user->getName(); ?></option>
    <?php } ?>
            
            
        </select>
       <button type="submit" class="btn btn-danger">Supprimer</button>
      </div>
    </form>
  </section>
    

 <?php
include("template/footer.php");
?>