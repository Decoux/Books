<?php 

declare (strict_types = 1);

class User extends Entity{
    protected $name,
              $firstname,
              $identifiant,
              $id_user,
              $id_book_borrow;

              


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of identifiant
     */ 
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set the value of identifiant
     *
     * @return  self
     */ 
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }


    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }



    /**
     * Get the value of id_book_borrow
     */ 
    public function getId_book_borrow()
    {
        return $this->id_book_borrow;
    }

    /**
     * Set the value of id_book_borrow
     *
     * @return  self
     */ 
    public function setId_book_borrow($id_book_borrow)
    {
        $this->id_book_borrow = $id_book_borrow;

        return $this;
    }
}