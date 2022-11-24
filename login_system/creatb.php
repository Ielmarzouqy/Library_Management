<?php
include "sidebar.php";
// session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <!-- <link rel="stylesheet" href="style/dashboard.css"> -->
    <!-- boxin CDN link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body class="p-0 m-0" style="overflow-y: auto;">
    <!-- ass="home_content" style="display: none;"></div> -->


        <?php include('message.php'); ?>

            <!-- <div class="col-md-8  col-xs-12"> -->


            <div class="row d-flex flex-column justify-content-center">
                <div class="d-flex justify-content-between ps-3 mb-2 col-12 col-lg-6 col-md-6">
                    <h4>Add book</h4>
                    <a href="viewbooks.php" class="btn btn-danger">Back</a>
                </div>
            

                <form action="addbook.php" method="POST" enctype="multipart/form-data" class="col-12 col-lg-6 col-md-6">

                <div class="form-group">
                    <label for="exampleFormControlFile1">Choose image</label>
                    <input type="file" class="form-control-file" name="my_img">
                </div>

                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="title">
                    </div>                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control" name="author"  aria-describedby="emailHelp" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Pages</label>
                        <input type="text"name="pages" class="form-control" id="exampleInputPassword1" placeholder="Pages">
                    </div>
                    
                
                 <button type="submit" name="save_book" class="btn btn-primary">Save Book</button>

                    
                </form>

            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>