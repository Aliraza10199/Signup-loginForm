<?php
require_once('form.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Profile Form</title>
</head>
<body>
<h1 class=" container text-secondary bg-info text-center "> Profile Form </h1>
<h4 class="text-danger d-flex justify-content-center mt-3">Please Enter Details !</h4>

<form  name="myForm" class=" container" onsubmit = "return(validate());" action="profileform.php" method="post">
    <div class="form-group  ">

        <label for="exampleInputfirstname">First Name</label>
        <input type="text" name="first" class="form-control" id="exampleInputfirstname" aria-describedby="emailHelp" >

    </div>
    <div class="form-group  mt-3">

        <label for="exampleInputLastname">Last Name</label>
        <input type="text"  name="last" class="form-control" id="exampleInputLastname" aria-describedby="emailHelp" ">

    </div>


    <div class="form-group  mt-3">
        <label for="exampleInputEmail">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail"  placeholder="abc@gmail.com">
    </div>

    <div class="form-group mt-3">
        <label for="exampleInputPassword">Password</label>
        <input type="password" name="pas" class="form-control" id="exampleInputPassword" placeholder="Password">
        <!--        <span>--><?php //echo $msg?><!--</span>-->
    </div>

    <div class="form-group  mt-3 ">
        <label    for="example-tel-input">Phone #</label>
        <input type="tel"  name="number"   id="example-tel-input"  placeholder="1234">
    </div>


    <button type="submit" class="btn btn-primary mt-3 mx-auto d-block">Submit</button>
</form>



<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>


<script type = "text/javascript">
    // var myInput = document.getElementById("pas");
    // Form validation code will come here.
    function validate() {

        if( document.myForm.first.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.first.focus() ;
            return false;
        }
        if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
        }

        if( document.myForm.pas.value == "" ) {
            alert( "Please provide your paswd!" );
            document.myForm.pas.focus() ;
            return false;
        }

        return( true );
    }
    //
    // myInput.onkeyup = function() {
    // // Validate numbers
    // var numbers = /[0-9]/g;
    // if(myInput.value.match(numbers)) {
    //     number.classList.remove("invalid");
    //     number.classList.add("valid");
    // } else {
    //     number.classList.remove("valid");
    //     number.classList.add("invalid");
    // }

    // Validate length
    if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
    }
</script>

</body>
</html>