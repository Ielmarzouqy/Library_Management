<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="style/mystyle.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="register">

<?php
    require('connectdb.php');
    
?>
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

        $query    = "INSERT into `admin` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
              header('Location: registration.php');

        }
    } else {
    ?>

        <div class="login-form">
            <form class="form " action="registration.php" method="post" id="form">
                <div></div>
                <h1 class="login-title">Registration</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" id="userName" />
                <p style="color: red; font-size: 10px;" id="errorMsgName"></p>
                <input type="text" class="login-input" name="email" placeholder="Email Adress" id="email" />
                <p style="color: red; font-size: 10px;" id="errorMsgEmail"></p>
                <input type="password" class="login-input " name="password" placeholder="Password" id="password" />
                <p style="color: red; font-size: 10px;" id="errorMsgPass"></p>
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
        const form = document.getElementById('form')
        const name = document.getElementById('userName')
        const email = document.getElementById('email')
        const password = document.getElementById('password')
        const errorMsgName = document.getElementById('errorMsgName')
        const errorMsgEmail = document.getElementById('errorMsgEmail')
        const errorMsgPass = document.getElementById('errorMsgPass')
        let valid = true

        form.addEventListener('click', (e) => {
            // e.preventDefault()
            formValidate();
        });

        function formValidate() {
            const nameValue = name.value.trim()
            const emailValue = email.value.trim()
            const passwordValue = password.value.trim()
        

            if (nameValue == '') {
                errorMsgName.innerHTML = 'name can not be empty'
            } else {
                errorMsgName.innerHTML = null
            }

            if (emailValue == '') {
                errorMsgEmail.innerHTML = 'email can not be empty'
            } else if (!isEmail(emailValue)) {
                errorMsgEmail.innerHTML = 'Not a valid email'
            } else {
                errorMsgEmail.innerHTML = null

            }

            if (passwordValue == '') {
                errorMsgPass.innerHTML = 'Password can not be empty'
            } else {
                errorMsgPass.innerHTML = null

            }
          

        }

        function isEmail(email) {
            return /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/.test(email)
        }
    </script>
</body>

</html>