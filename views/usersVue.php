<?php
include("template/header.php")
?>
 
  <section class="container">
    <div class="table-responsive table-responsive-firefox">
    <table class="mt-5 table table-striped">
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Identifiant</th>
          <th scope="col">Identifiant</th>


        </tr>
      </thead>
      <tbody>
      <?php $i = 1; ?>
        <?php foreach($users as $user){ ?>
          <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $user->getName(); ?></td>
            <td><?php echo $user->getFirstname(); ?></td>
            <td class="text-danger"><?php echo $user->getIdentifiant(); ?></td>
            <td><a href="userDetails.php?id=<?php echo $user->getId_user(); ?>" class="btn btn-outline-info"><input class="btn" type="submit" value="Details"></a></td>
          </tr>
          
        <?php $i++ ?>
      <?php } ?>
        </tbody>
    </table>
    </div>
  </section>


 <?php
include("template/footer.php")
?>
