<?php

class PictureManager extends Manager{
    public function addPicture(Picture $picture){
        $req = $this->getDb()->prepare('INSERT INTO pictures(picture, alt) VALUE (:picture, :alt)');
        $req->bindValue(':picture', $picture->getPicture(), PDO::PARAM_STR);
        $req->bindValue(':alt', $picture->getPicture(), PDO::PARAM_STR);
        $req->execute();

    }

    public function getLastPicture()
    {
        $req = $this->getDb()->query('SELECT * FROM pictures ORDER BY id_picture DESC LIMIT 1');
        $pictureLast = $req->fetch(PDO::FETCH_ASSOC);
        $objectPicture = new Picture($pictureLast);
        return $objectPicture;
    }
}