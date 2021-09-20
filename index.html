<?php
$emailErrs="";
include ('db_connect.php');
require_once('session.php');
require_once('db_connect.php');
$Loginemail = $Loginpass = "";
$erro = "";


//if(isset($_POST['loginbtn']))
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Loginemail = $_POST['log_email'];
    $Loginpass = $_POST['log_pas'];

    $sql = "SELECT Fname, phone, email, pasward FROM  formdata where email=?";
    //prepare statment
    $stmt = mysqli_prepare($conn, $sql);

    //bind parameter
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $Loginemail;

    // Try to execute this statement
    if (mysqli_stmt_execute($stmt)) {

        mysqli_stmt_store_result($stmt);


        if (mysqli_stmt_num_rows($stmt) == 1) {

            //bind result set in varibles
            mysqli_stmt_bind_result($stmt, $name,$phone, $loginemail, $hashed_password);

            //fetch rows
            if (mysqli_stmt_fetch($stmt))
            {
                // Function defnition
                function function_alert($name, $phone) {

                    // Display the alert box
                    echo "<script>alert('welcome to login User: $name Phone#: $phone');</script>";
                }

                // Function call
                function_alert($name, $phone);
                if (password_verify($Loginpass, $hashed_password)) {
                    echo "<br> correct pasword";

//                            // this means the password is corrct. Allow user to login
//                            session_start();
//                            $_SESSION["email"] = $Loginemail;
//                            $_SESSION["loggedin"] = true;
//                            Redirect user to welcome page
//                            header("location: welcome.php");
                } else {
                    echo "<br>not matched paswd";
                }
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!--    <script type="text/javascript" src="functionlityclass.js"></script>-->
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
</head>

<body class="bg">
<div class="container bg-light   border border-secondary  bg-gradient  rounded w-25">
        <h1 class="border border-dark rounded ml-1 text-white bg-secondary text-center   "> Login Form</h1>

    <form class=" mt-5   " id="login_form" name="login_form" action="login.php" method="post" onsubmit="openModal()">

        <div class="   container">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input   type="email" class="form-control" id="log_email" name="log_email" placeholder="name@example.com" required>
            <span class="text-danger">* <?php echo $emailErrs;?></span>
            <br>
        </div>

        <div class="  container  ">
            <label for="exampleformpasword" class="form-label">Password</label>
            <input type="password" class="form-control" id="log_pas" name="log_pas" placeholder="Password" required>
        </div>

        <button type="submit" name="loginbtn" class="btn btn-primary mt-3 mx-auto d-block">Login</button>
        <P class="container text-center"> Not yet a Member? <a href="profileform.php">Sign up</a> </P>
    </form>

    </div>




    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
            integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
            integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
            crossorigin="anonymous"></script>




</body>
</html
