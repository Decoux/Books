<?php
include("template/header.php")
?>
 
  <section class="container">
    <div class="d-flex flex-wrap">

      <?php foreach($books as $book){ ?>
        
       <a href="book.php?id=<?php echo $book['book']->getId_books(); ?>" onmouseover="flip(this)" onmouseout="reFlip(this)" class="text card col-12 col-md-4 my-5 p-3">
          
              <div><p class="text-center"><?php  echo $book['book']->getTitle();?></p></div>
              <span class="px-2 back card__side--back is-switched card__wrapper text-wrap text-truncate"><?php echo $book['book']->getResume(); ?></span>
            
              <div id="<?php echo $book['book']->getPicture_id() ?>" class="sizeImgCard ">
                <img src="../assets/img/<?php if($book['picture']->getPicture() == NULL){echo 'dark-blue-book-background.jpg'; }else{ echo $book['picture']->getPicture(); } ?>" class="sizeImg card-img-top" alt="<?php if($element instanceof Picture){ echo $element->getAlt(); } ?>">
              </div>  
            
             
            

        </a>
      <?php } ?>
    </div>
    
      </section>
    

 <?php
include("template/footer.php");
?>