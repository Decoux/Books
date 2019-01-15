<?php

class UserManager extends Manager{
    public function addUser(User $user){
        $req = $this->getDb()->prepare('INSERT INTO users(name, firstname, identifiant) VALUES(:name, :firstname, :identifiant)');
        $req->bindValue(':name', $user->getName(), PDO::PARAM_STR);
        $req->bindValue(':firstname', $user->getFirstname(), PDO::PARAM_STR);
        $req->bindValue(':identifiant', $user->getIdentifiant(), PDO::PARAM_STR);
        $req->execute();
    }

    public function getUsers(){
        $req = $this->getDb()->query('SELECT * FROM users');
        $users = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach($users as $user){
            $usersObj[] = new User($user);
        }
        return $usersObj;
    }

    public function deleteUser($id){
        $req = $this->db->prepare('DELETE FROM users WHERE identifiant = :id');
        $req->bindValue(':id', $id, PDO::PARAM_STR);
        $req->execute();
    }

    public function borrowReturnBook($user, $book){
        $req = $this->getDb()->prepare('UPDATE users SET id_book_borrow = :id_book_borrow WHERE identifiant = :identifiant');
        $req->bindValue(':id_book_borrow', $book, PDO::PARAM_INT);
        $req->bindValue(':identifiant', $user, PDO::PARAM_STR);
        $req->execute();

    }


}