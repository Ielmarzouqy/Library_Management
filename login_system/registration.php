<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style/mystyle.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style=" background: url(img/book.png);
    height:100vh;">
<?php
    require('connectdb.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        //remove datetime
        $query    = "INSERT into `admin` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            // echo "<div class='form'>
            //       <h3>You are registered successfully.</h3><br/>
            //       <p class='link'>Click here to <a href='login.php'>Login</a></p>
            //       </div>";
        } 
        else {
            // echo "<div class='form'>
            //       <h3>Required fields are missing.</h3><br/>
            //       <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
            //       </div>";
                //   header('Location: registration.php');

        }
    } else {
?>
    
   <div class="login-form"  >
    <form class="form "action="registration.php" method="post" id="form">
        <div  ></div>
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username"  id="userName"/>
        <input type="email" class="login-input" name="email" placeholder="Email Adress"  id="email"/>
        <input type="password" class="login-input " name="password" placeholder="Password"  id="password"/>
        <input type="submit" name="submit" value="Register" class=" login-button" id="button">
        <!-- <button class="btn btn-success" type="submit" name="submit" value="Register" class="btn login-button">Register</button> -->

        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
    </div> 
<?php
    }
?>
    <!-- <script src="valid.js"></script> -->

    <script>
        var form = document.getElementById('form')
        var name = document.getElementById('userName')
        var email = document.getElementById('email')
        var password = document.getElementById('password')
        
        form.addEventListener('submit', (e) => {
            e.preventDefault()
            formValidate()
        })

        function formValidate(){
            const nameValue = name.value.trim()
            if(nameValue === ''){
                console.log('llllllll')
            }
        }

    </script>
</body>
</html>
