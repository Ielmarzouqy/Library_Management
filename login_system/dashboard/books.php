<?php 
// include "dashboard.php";
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
    <link rel="stylesheet" href="dashboard.css">
    <!-- boxin CDN link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>

    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bx-book'></i>
                <div class="logo_name">Library </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search ">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>  
                    <span class="links_name">Dashboard</span>
                </a>
                    <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-al-2 '></i>  
                    <span class="links_name">Analytics</span>
                </a>
                    <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>  
                    <span class="links_name">Order</span>
                </a>
                    <span class="tooltip">Order</span>
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
                    <div class="name">Imane</div>
                    <div class="job">Admin</div>
                    </div>
                </div>
                <i class='bx bx-log-out'id="log_out"></i>
            </div>
        </div>
    </div>
<!-- <div class="home_content" style="display: none;"></div> -->
<div class="cantainer mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add book
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>Picture</label>
                            <input type="text" name="img" class="form-control">
                        </div>   
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>   
                        <div class="mb-3">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>   
                        <div class="mb-3">
                            <label>Pages</label>
                            <input type="text" name="pages" class="form-control">
                        </div>                    
                       <div class="mb-3">
                        <button type="submit" name="save_book" class="btn btn-primary">Save Book</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>