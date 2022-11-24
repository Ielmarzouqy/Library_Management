<?php 
include "sidebar.php";
require 'connectdb.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Edit</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <!-- boxin CDN link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
        <!-- ass="home_content" style="display: none;"></div> --> 
<div style ="overflow-y:auto" class="form ms-5 mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Book Edit
                        <a href="viewbooks.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])){
                      $book_id = mysqli_real_escape_string( $conn, $_GET['id']); 
                        $query = "SELECT *FROM books WHERE id = '$book_id'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                            $book = mysqli_fetch_array($query_run);
                            // print_r($book);
                             ?>
                   
                            <form action="addbook.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="book_id" value="<?= $book['id'];?>">
                                <!-- <div class="mb-3">
                                    <label>Picture</label>
                                    <input type="text" name="img" class="form-control">
                                </div>    -->
                                <label>Choose image <br> </label>
                                <div>
                                        <input type="file" name="my_img">
                                </div> 
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="title" value="<?= $book['title'];?>" class="form-control">
                                </div>   
                                <div class="mb-3">
                                    <label>Author</label>
                                    <input type="text" name="author"  value="<?= $book['author_name'];?>" class="form-control">
                                </div>   
                                <div class="mb-3">
                                    <label>Pages</label>
                                    <input type="text" name="pages"  value="<?= $book['pages'];?>" class="form-control">
                                </div>                    
                            <div class="mb-3">
                                <button type="submit" name="update_book" class="btn btn-primary">Update Book</button>
                            </div>
                            </form>

                            <?php


                        }else{
                            echo "<h4>No Such Id Found</h4>";
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>