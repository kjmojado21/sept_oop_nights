<?php 
include 'classes/Books.php';
$BooksObj = new Books;

if(isset($_POST['save_book'])){
    $bookName = $_POST['book_name'];
    $bookGenre = $_POST['book_genre'];
    $bookAuthor = $_POST['book_author'];

    $BooksObj->add_book($bookName,$bookGenre,$bookAuthor);

}


?>