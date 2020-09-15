<?php include 'booksAction.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="jumbotron">
            <p class="lead text-center">
                ADD A NEW BOOK
            </p>
        </div>
        <form action="booksAction.php" method="post">
            <input type="text" name="book_name" id="" class="form-control" placeholder="ENTER BOOK NAME"><br>
            
            <select name="book_genre" class="form-control" id="">
                <option selected disabled>CHOOSE GENRE</option>
                <option value="comedy">comedy</option>
                <option value="horror">horror</option>
                <option value="sci-fi">sci-fi</option>
                <option value="conspiracy-fiction">conspiracy-fiction</option>
            </select>
            <br>

            <input type="text" name="book_author" id="" class="form-control"  placeholder="ENTER BOOK AUTHOR">

            <br>
            <button type="submit" name="save_book" class="btn btn-outline-info">SAVE BOOK INFO</button>

        </form>
    
    </div>


      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
          <div class="col-lg-4">

          </div>
        </div>

      </div>

        <div class="container mt-3">
          <p class="lead">
            Manage Books
          </p>
          <table class="table table-bordered table-info table-striped">
              <thead>
                <td>BOOK ID</td>
                <td>BOOK NAME</td>
                <td>BOOK GENRE</td>
                <td>BOOK AUTHOR</td>
                <td>OPTIONS</td>
              </thead>

              <tbody>
                <?php 
                  $bookList = $BooksObj->display_books();
                  foreach($bookList as $book){
                    $bookID = $book['book_id'];
                    echo "<tr>";
                      echo "<td>";
                        echo $book['book_id'];
                      echo "</td>";

                      echo "<td>";
                        echo $book['book_name'];
                      echo "</td>";

                     echo "<td>";
                        echo $book['book_genre'];
                     echo "</td>";

                     echo "<td>";
                        echo $book['book_author'];
                     echo "</td>";

                    echo "<td>";
                        echo "<a href='delete.php?book_id=$bookID' class ='btn btn-outline-danger'>DELETE</a>";
                    echo "</td>";

                    echo "<td>";
                    echo "<a href='' class ='btn btn-outline-primary'>UPDATE</a>";
                echo "</td>";

                    
                    echo "</tr>";

                  }
                
                ?>
              </tbody>
          </table>
          
        
        </div>




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>