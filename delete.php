<?php 
include 'booksAction.php';


$bookID = $_GET['book_id'];
$BooksObj->delete_book($bookID);

// echo $bookID;
?>