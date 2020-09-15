<?php 
include 'Database.php';
// include connects the files, not the classes

// extends connects 2 or more separate classes
class Books extends Database{

    function add_book($bName,$bGenre,$bAuthor){
        $conn = $this->conn;
        $sql = "INSERT INTO books(book_name,book_genre,book_author)VALUES('$bName','$bGenre','$bAuthor')";
        $result = $conn->query($sql);

        if($result == TRUE){
           header('location:addBooks.php');
        }else{
            echo "error in adding book";
        }

    }
    function display_books(){
        $conn = $this->conn;
        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows; 
            }
            return $row;


        }else{
            return FALSE;

        }

    }

    function delete_book($id){
        $conn = $this->conn;
        $sql = "DELETE FROM books WHERE book_id = '$id'";
        $result = $conn->query($sql);

        if($result == TRUE){
            header('location:addBooks.php');
         }else{
             echo "error in deleting book";
         }

    }


    // ako nani na hatag niya. boang maning bayhana
    function update_info($id,$bName,$bGenre,$bAuthor){
        $conn = $this->conn;
        $sql = "UPDATE books SET bookname ='$bName', book_genre = '$bGenre', book_author = '$bAuthor' WHERE book_id = '$id'";
        $result = $conn->query($sql);

        if($result == TRUE){
            header('location:addBooks.php');
         }else{
             echo "error in deleting book";
         }

    }

}

?>