<?php

class categorieManager extends Manager
{
    public function addCategorie(categorie $categorie)
    {
        $req = $this->getDb()->prepare('INSERT INTO categorie(categorie) VALUE (:categorie)');
        $req->bindValue(':categorie', $categorie->getCategorie(), PDO::PARAM_STR);
        $req->execute();

    }

    public function getLastCategorie()
    {
        $req = $this->getDb()->query('SELECT * FROM categorie ORDER BY id_categorie DESC LIMIT 1');
        $categorieLast = $req->fetch(PDO::FETCH_ASSOC);
        $objectCategorie = new categorie($categorieLast);
        return $objectCategorie;
    }
}