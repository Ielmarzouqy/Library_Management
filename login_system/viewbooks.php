<?php
require 'connectdb.php';

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
<body style="overflow-y:auto">
        <!-- <div class="table-responsive  "> -->
          <!-- <div class="me-4 ms-5"> -->
             <?php include("sidebar.php"); ?>
             <!-- <div class="card">
                      <div class="card-header mt-4 col-sm-9 ">
                        
                        <h4 > Book Details 
                        <a href="creatb.php" class="btn btn-primary float-end ">Add book</a>
                        </h4>
                      
                    </div>
              </div> -->
              <div>
                <a href="creatb.php" class="btn btn-primary text-center text-small">Add book</a>
              </div>
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-md-8 col8">
                      <table class="table table-white">
              <thead>
                <tr>
                    <th class="text-" scope="col">Picture</th>
                    <th class="text-" scope="col">Book title</th>
                    <th class="text-" scope="col">Author</th>
                    <th class="text-" scope="col">Pages</th>
                    <th class="text-" scope="col">Action</th>
                  </tr>
              </thead>
                <tbody>
                
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
                                        <a href="book_edit.php?id=<?=$book['id'] ?>"class="btn btn-success btn-sm">Edit</a>
                                        <form action="addbook.php" method="POST" class="d-inline">
                                          <input type="hidden" name="book_id1" value="<?= $book['id'];?>">
                                          <button name="delete_book" type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                  </tr>  
                                <?php
                                  }}else { echo"No record found";}
                              ?>
                </tbody>
              </table>
                    </div>
                  </div>
                </div>
              
            <!-- </div> -->
      <!-- </table> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
  </body>
</html>