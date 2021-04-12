<?php
$emailErr =  $PhoneNoErr= $passErr= "";
require_once ('db_connect.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST')
//if(isset($_POST['regester']))
{
    $fname = $_POST['first'];
    $Lname = $_POST['last'];
    $email = $_POST['email'];
    $paward = $_POST['pas'];
    $Pnumber = $_POST['number'];
    $pasward = password_hash($paward, PASSWORD_DEFAULT);



    //for multiple phone numer
    $query= mysqli_query($conn, "SELECT * FROM  `formdata` where phone= '$Pnumber'" );

        if(mysqli_num_rows($query)>0)
        {
            $PhoneNoErr = "Phone# already in use choose another!!" ;
        }else
        {
                //for Multiple Email
                $querys = mysqli_query($conn, "SELECT * FROM  `formdata` where email= '$email'");
                if (mysqli_num_rows($querys) > 0) {
                    $emailErr = " Email already Taken  choose another ";
                } else
                {



                        $sql = "INSERT INTO `formdata`(`Fname`, `Lname`, `email`, `pasward`, `phone`) VALUES('$fname', '$Lname', '$email', '$pasward', '$Pnumber')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>Success!</strong> Your entry has been submitted successfully!
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>';
                            header ("location: login.php");
                        } else
                        {
                            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>';

                        }
                    }
                }






}


?>