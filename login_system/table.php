<?php
include("sidebar.php");

require 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
        <div class="table-responsive">
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
                                    <td> <img style="height:7rem" src="img/<?=$book['img_url']?>"></td>
                                    <td> <?=$book['title']?></td>
                                    <td> <?=$book['author_name']?></td>
                                    <td> <?=$book['pages']?></td>
                                    <td>Edit & Update </td>
                                  </tr>  
                                <?php
                                  }}else { echo"No record found";}
                              
                              ?>
                </tbody>
              </table>
            </div>
      </table>
</body>
</html>
