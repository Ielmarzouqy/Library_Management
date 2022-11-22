<?php
require 'connectdb.php';
// include("sidebar.php");
?>
<!doctype html>
<html lang="en"><html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style/mystyle.css"> -->
  <link rel="stylesheet" href="style/dashboard.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
        <!-- <div class="table-responsive  "> -->

        <div class="me-4 ms-5">
            <table class="table table-white">
              <thead>
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                      <div class="card-header mt-4 ">
                        
                        <h4 > Book Details 
                        <a href="creatb.php" class="btn btn-primary float-end ">Add book</a>
                        </h4>
                      
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </thead>
                <tbody>
                <tr>
                    <th class="text-" scope="col">Picture</th>
                    <th class="text-" scope="col">Book title</th>
                    <th class="text-" scope="col">Author</th>
                    <th class="text-" scope="col">Pages</th>
                    <th class="text-" scope="col">Action</th>
                  </tr>
                  <?php
                        $query = "SELECT * FROM books";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows( $query_run) > 0)
                            {
                              foreach($query_run as $book){
                                ?>
                                  <tr>
                                    <td> <img style="height:7rem" src="img/<?=$book['img_url']?>" ></td>
                                    <td> <?=$book['title']?></td>
                                    <td> <?=$book['author_name']?></td>
                                    <td> <?=$book['pages']?></td>
                                    <td>
                                        <a href="book_edit.php?id=<?= $book['id'] ?>"class="btn btn-success btn-sm">Edit</a>
                                        <form action="addbook" method="POST" class="d-inline">
                                        <button type="submit" name="delete_book" value="<?=$book['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                  </tr>  
                                <?php
                                  }}else { echo"No record found";}
                              ?>
                </tbody>
              </table>
            </div>
      </table>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
  </body>
</html>