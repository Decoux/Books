<?php
include("template/header.php")
?>
 
  <section class="container">
    <form class="mt-5 d-flex justify-content-center" action="returnBook.php" method="post">
        <select class="custom-select" name="user" id="">
            <?php foreach ($users as $user) { ?>
                <option value="<?php echo $user->getIdentifiant(); ?>"><?php echo $user->getName(); ?></option>
            <?php 
        } ?>
        </select>
        <select class="custom-select" name="book" id="">
            <?php foreach ($books as $book) { ?>
                <option value="<?php echo $book['book']->getId_books(); ?>"><?php echo $book['book']->getTitle(); ?></option>
            <?php 
        } ?>
        </select>
        <button type="submit" class="btn btn-dark">Restituer</button>
    </form>
  </section>


 <?php
include("template/footer.php")
?>