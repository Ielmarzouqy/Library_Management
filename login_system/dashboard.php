<?php
//include auth_session.php file on all user panel pages
// include("auth_session.php");
include("sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <!-- boxin CDN link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
    <div class="home_content">
        <div class="text">Library Management System</div>
        <div class="statistic text-white ">
            <div class="  col-xl-4 col-lg-6 ms-3 p-2 border Books">
                <h4 class="ms-3">BOOKS</h4>
                <span>count <br></span>
                <a href="viewbooks.php">see more</a>
                <img class="" src="img/book-fair.png" alt="">
            </div>
            <!-- <div class="  col-xl-4 col-lg-6 m-3 p-5 border newspaper">
                <h4 class=" ">Newspaper</h4>
                <span>count <br></span>
                <a href="books.php">see more</a>
            </div> -->
        </div>  
    </div>
</body>
</html>