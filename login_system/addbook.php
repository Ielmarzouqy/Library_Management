<?php
    // include "dashboard.php";
    // session_start();

use function PHPSTORM_META\map;

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books view</title>
</head>
<body>
    <?php
    require 'connectdb.php';
    if(isset($_POST['delete_book'])){
        $book_id = $_POST['book_id1'];

        $query = "DELETE FROM books WHERE id= '$book_id' ";
        $query_run = mysqli_query($conn, $query);
        header("location: viewbooks.php");

        // if($query_run){
        //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //     <strongdelet secceful</strong>
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }else{
        //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //     <strong>wrong delete</strong>
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
    }

    if(isset($_POST['update_book'])){
        $book_id = mysqli_real_escape_string($conn, $_POST['book_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $pages = mysqli_real_escape_string($conn, $_POST['pages']);

        $query = "UPDATE  books SET title =' $title', author_name ='$author', pages = '$pages' 
                    WHERE id=$book_id";
        $query_run = mysqli_query($conn,$query);
        header("Location: viewbooks.php");
    }
    if(isset($_POST['save_book'])){
        session_start();
        $img_name = $_FILES['my_img']['name'];
        $img_size = $_FILES['my_img']['size'];
        $tmp_name = $_FILES['my_img']['tmp_name'];
        $error = $_FILES['my_img']['error'];

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $pages = mysqli_real_escape_string($conn, $_POST['pages']);
        $id = $_SESSION['id_admin'];
        if($error === 0){
            if($img_size > 1250000){
                echo "sorry you file is too large.";
            //    header("location: boo.php?error=$em");
            }
            else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_et_lc = strtolower($img_ex);
                
                $allowed_exs = array("jpg", "jpeg", "png");
    
                if(in_array($img_et_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_et_lc;
                    $img_upload_path = 'img/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

        
                    $query = "INSERT INTO books (img_url, title, author_name, pages, admin_id) VALUES
                    ('$new_img_name', '$title', '$author', '$pages', $id)";
    
            $query_run = mysqli_query($conn, $query);
            header('Location: viewbooks.php');

                }else{
                    echo "You can't upload files of this type";
                    // header("location: index.php?error=$em");
            
                }
            }
        }else{
            echo "unknown error occurred! ";
            // header("location: books.php?error=$em");
    
        }
        // if($query_run)
        // {
        //         $_SESSION['message'] = "Book Created Successfully";            
        //         header("Location: creatb.php");
        //         exit(0);
        // }
        // else{
        //     $_SESSION['message'] = "Book Not Created ";            
        //     header("Location: creatb.php");
        //     exit(0);
        // }
     }

    

    ?>
</body>
</html>
