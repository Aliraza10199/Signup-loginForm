

<?php
require_once('form.php');
require_once ('db_connect.php');
require_once('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script type="text/javascript" src="functionlityclass.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <title>Profile Form</title>

</head>
<body class="bg">

<div class="container-sm bg-light border border-primary rounded w-25 h-70">

    <h1 class=" container text-secondary  text-center "> Profile Form </h1>
<h4 class="text-danger d-flex justify-content-center mt-3">Please Enter Details !</h4>
<!--Form-->
<form  name="myForm" id="myForm" class=" container" onsubmit = "return check_pass()" action="profileform.php" method="post">
    <div class="form-group  ">

        <label for="exampleInputfirstname">First Name</label>
        <input type="text" name="first" class="form-control" id="exampleInputfirstname" aria-describedby="emailHelp"required  >

    </div>
    <div class="form-group  ">

        <label for="exampleInputLastname">Last Name</label>
        <input type="text"  name="last" class="form-control" id="exampleInputLastname" aria-describedby="emailHelp" ">

    </div>


    <div class="form-group  ">
        <label for="exampleInputEmail">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail"  placeholder="abc@gmail.com" required>
        <span class="text-danger">* <?php echo $emailErr;?></span>
        <br>
    </div>

    <div class="form-group ">
        <label for="exampleInputPassword">Password</label>
        <input type="password" name="pas" class="form-control" id="exampleInputPassword" placeholder="Password" value="" required >
<!--        <span class="error">* --><?php //echo $passErr;?><!--</span>-->
        <span  class="text-danger" id="message">* </span>
        <br>
    </div>

    <div class="form-group  ">
        <label    for="example-tel-input">Phone #</label>
        <input type="tel"  name="number"   class="form-control" id="example-tel-input"  placeholder="1234" required>
        <span class="text-danger">* <?php echo $PhoneNoErr;?></span>
        <br>
    </div>

    <div class="container   mb-3">
        <div class="row">
            <div class="col">
                <button type="submit"  name="regester" class="btn btn-primary col-md-6 form-control btn-block" >Sign up</button>
            </div>
            <div class="col">
                <button id="btnSubmit" class="btn btn-primary form-control btn-block" type="submit"  >Login</button></div>
        </div>
        <div>
</form>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>




<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>





</body>
</html>

