<?php
    // include "dashboard.php";
    // session_start();
    
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
    // if(isset($_OPST['delete_book'])){
    //     $book_id = mysqli_real_escape_string($conn, $_POST['delete_book']);

    //     $query = "DELETE FROM books WHERE id='$book_id'";
    //     $query_run = mysqli_query($conn, $query);
    // }

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
    // session_start();
    if(isset($_POST['save_book'])){
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
                }else{
                    echo "You can't upload files of this type";
                    // header("location: index.php?error=$em");
            
                }
            }
        }else{
            echo "unknown error occurred! ";
            // header("location: books.php?error=$em");
    
        }
     }
        $query = "INSERT INTO books (img_url, title, author_name, pages, id_admin) VALUES
                ('$new_img_name', '$title', '$author', '$pages', $id)";

        $query_run = mysqli_query($conn, $query);
        // if($query_run)
        // {
        //     header
        // }

    

    ?>
</body>
</html>
