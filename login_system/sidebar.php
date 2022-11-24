<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
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

    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
               <a href="index.php"> <i class='bx bx-book'></i></a>
                <div class="logo_name">Library </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <!-- <li>
                <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search ">
                <span class="tooltip">Search</span>
            </li> -->
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>  
                    <span class="links_name">Dashboard</span>
                </a>
                    <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="viewbooks.php">
                    <i class='bx bx-book-open '></i>  
                    <span class="links_name">Books</span>
                </a>
                    <span class="tooltip">Books</span>
            </li>
           
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>  
                    <span class="links_name">Settings</span>
                </a>
                    <span class="tooltip">Settings</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <!-- <img src="" alt=""> -->
                    <div class="name_job">
                    <div class="name"> <?php echo $_SESSION['username']; ?> </div>
                    <div class="job">Admin</div>
                    </div>
                </div>
				<a href="logout.php">  <i class='bx bx-log-out'id="log_out"></i></a>
              
            </div>
        </div>
    </div>

    <div class="home_content">
        <div class="row d-block px-4 ti">
            <div class="text ">Library Management System</div>
     <!-- <div class="home_content"> -->
        <!-- <div class="text">Library Management System</div> -->
        <!-- <div class="statistic text-white ">
            <div class="  col-xl-4 col-lg-6 ms-3 p-2 border Books">
                <h4 class="ms-3">BOOKS</h4>
                <span>count <br></span>
                <a href="viewbooks.php">see more</a>
                <img class="" src="img/book-fair.png" alt="">

            </div>  -->
        
    
            <!-- <div class="  col-xl-4 col-lg-6 m-3 p-5 border newspaper">
                <h4 class=" ">Newspaper</h4>
                <span>count <br></span>
                <a href="books.php">see more</a>
            </div> -->
        <!-- </div>  
    </div> -->
    <script>

        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let seachBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        seachBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script>
</body>
</html>