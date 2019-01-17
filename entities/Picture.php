<?php 

declare (strict_types = 1);

class Picture extends Entity{
    protected $id_picture,
              $picture,
              $alt;


    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of alt
     */ 
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set the value of alt
     *
     * @return  self
     */ 
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get the value of id_picture
     */ 
    public function getId_picture()
    {
        return $this->id_picture;
    }

    /**
     * Set the value of id_picture
     *
     * @return  self
     */ 
    public function setId_picture($id_picture)
    {
        $this->id_picture = $id_picture;

        return $this;
    }
}