<?php

class BookManager extends Manager{
    public function addBook(Book $book){
        $req = $this->getDb()->prepare('INSERT INTO books(title, author, date, resume, picture_id, books_categorie_id) VALUE (:title, :author, :date, :resume, :picture_id, :books_categorie_id)');
        $req->bindValue(':title', $book->getTitle(), PDO::PARAM_STR);
        $req->bindValue(':author', $book->getAuthor(), PDO::PARAM_STR);
        $req->bindValue(':date', $book->getDate(), PDO::PARAM_STR);
        $req->bindValue(':resume', $book->getResume(), PDO::PARAM_STR);
        $req->bindValue(':picture_id', $book->getPicture_id(), PDO::PARAM_INT);
        $req->bindValue(':books_categorie_id', $book->getBooks_categorie_id(), PDO::PARAM_INT);
        $req->execute();
    }

    public function getBooks(){
        $req = $this->getDb()->query('SELECT books.id_books id_books,
                                             books.title title,
                                             books.author author,
                                             books.date date,
                                             books.resume resume,
                                             books.picture_id picture_id,
                                             books.books_categorie_id books_categorie_id,
                                             pictures.id_picture id_picture,
                                             pictures.picture picture,
                                             pictures.alt alt,
                                             categorie.id_categorie id_categorie,
                                             categorie.categorie categorie
                                    FROM books 
                                    INNER JOIN pictures 
                                    INNER JOIN categorie 
                                    ON books.picture_id = pictures.id_picture 
                                    WHERE books.books_categorie_id = categorie.id_categorie');
                                    


        
        $books = $req->fetchAll(PDO::FETCH_ASSOC);
        foreach($books as $book){
         
            $res['book'] = new Book($book);
            $res['picture'] = new Picture($book);
            $res['categories'] = new Categorie($book);
            
            $g[] = $res;
            // $tab1[] = $tab2;
            // $tab2 = [];
        }

        return $g;
    }

    public function getBook($id){
        $req = $this->getDb()->prepare('SELECT books.id_books id_books,
                                             books.title title,
                                             books.author author,
                                             books.date date,
                                             books.resume resume,
                                             books.picture_id picture_id,
                                             books.books_categorie_id books_categorie_id,
                                             pictures.id_picture id_picture,
                                             pictures.picture picture,
                                             pictures.alt alt,
                                             categorie.id_categorie id_categorie,
                                             categorie.categorie categorie
                                    FROM books 
                                    INNER JOIN pictures 
                                    ON books.picture_id = pictures.id_picture 
                                    INNER JOIN categorie 
                                    ON books.books_categorie_id = categorie.id_categorie
                                    WHERE books.id_books = :id_book');
        $req->bindValue(':id_book', $id);
        $req->execute();
        $book = $req->fetch(PDO::FETCH_ASSOC);
        $res['book'] = new Book($book);
        $res['picture'] = new Picture($book);
        $res['categories'] = new Categorie($book);

        $g[] = $res;
        
        return $g;
    }

    public function deleteBook($bookId){
        $req = $this->db->prepare('DELETE FROM books WHERE id_books = :id');
        $req->bindValue(':id', $bookId, PDO::PARAM_INT);
        $req->execute();
    }

    public function updateBook(Book $book, $id){
        $req = $this->getDb()->prepare('UPDATE books SET title = :title, author = :author, resume = :resume, date = :date WHERE id_books = :id');
        $req->bindValue(':title', $book->getTitle(), PDO::PARAM_STR);
        $req->bindValue(':author', $book->getAuthor(), PDO::PARAM_STR);
        $req->bindValue(':resume', $book->getResume(), PDO::PARAM_STR);
        $req->bindValue(':date', $book->getDate(), PDO::PARAM_STR);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function updatePicture(Picture $newPicture, Picture $picture)
    {
        $req = $this->getDb()->prepare('UPDATE pictures SET picture = :picture, alt = :alt WHERE id_picture = :id');
        $req->bindValue(':picture', $newPicture->getPicture(), PDO::PARAM_STR);
        $req->bindValue(':alt', $newPicture->getAlt(), PDO::PARAM_STR);
        $req->bindValue(':id', $picture->getId_picture(), PDO::PARAM_INT);
        $req->execute();
    }

    public function updateCategorie(Categorie $newCategorie, categorie $categorie){
        $req = $this->getDb()->prepare('UPDATE categorie SET categorie = :categorie WHERE id_categorie = :id');
        $req->bindValue(':categorie', $newCategorie->getCategorie(), PDO::PARAM_STR);
        $req->bindValue(':id', $categorie->getId_categorie(), PDO::PARAM_STR);
        $req->execute();

    }

    
}