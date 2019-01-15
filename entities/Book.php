<?php 

declare (strict_types = 1);

class Book extends Entity{
    protected 
              $id_books,
              $title,
              $author,
              $date,
              $resume,
              $picture_id,
              $books_categorie_id;

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }


    /**
     * Get the value of picture_id
     */ 
    public function getPicture_id()
    {
        return $this->picture_id;
    }

    /**
     * Set the value of picture_id
     *
     * @return  self
     */ 
    public function setPicture_id($picture_id)
    {
        $this->picture_id = $picture_id;

        return $this;
    }



        /**
         * Get the value of books_categorie_id
         */ 
        public function getBooks_categorie_id()
        {
                return $this->books_categorie_id;
        }

        /**
         * Set the value of books_categorie_id
         *
         * @return  self
         */ 
        public function setBooks_categorie_id($books_categorie_id)
        {
                $this->books_categorie_id = $books_categorie_id;

                return $this;
        }




    /**
     * Get the value of id_books
     */ 
    public function getId_books()
    {
        return $this->id_books;
    }

    /**
     * Set the value of id_books
     *
     * @return  self
     */ 
    public function setId_books($id_books)
    {
        $this->id_books = $id_books;

        return $this;
    }
}