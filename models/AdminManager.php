<?php

class AdminManager extends Manager{
    
    public function addAdmin(Admin $admin){
        $req = $this->getDb()->prepare('INSERT INTO admin(firstname, mail, pass) VALUE (:firstname, :mail, :pass)');
        $req->bindValue(':firstname', $admin->getFirstname(), PDO::PARAM_STR);
        $req->bindValue(':mail', $admin->getMail(), PDO::PARAM_STR);
        $req->bindValue(':pass', $admin->getPass(), PDO::PARAM_STR);
        $req->execute();
    }

    public function adminExist(Admin $admin){
        $req = $this->getDb()->prepare('SELECT * FROM admin WHERE mail = :mail');
        $req->bindValue(':mail', $admin->getMail(), PDO::PARAM_STR);
        $req->execute();
        $adminExist = $req->fetch(PDO::FETCH_ASSOC);
        if($adminExist==TRUE){
            $adminobj = new Admin($adminExist);
            return $adminobj;
        }else{
            return;
        }
    }


}