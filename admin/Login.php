<?php
session_start();

?>
    <!DOCTYPE>
    <html>
    <head>
        <title>Login Form</title>
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <link rel="stylesheet" type="text/css" href=bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap/dist/js/bootstrap.min.js"></script>

    </head>
    <body>
    <div class="login">


        <div class="row" align="center">

            <h1>Admin panel</h1>
        </div>
        <form method="post" action="login.php">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form">
                            <span></span>
                            <form method="POST" action="login.php">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input class="form-control" name="email" placeholder="Enter your email" type="email" value="" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter your password" required="required">
                                </div>
                                <button type="submit" name="login" class="btn btn-primary">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>


    </body>
    </html>

<!--

include("includes/connection.php");

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($database,$_POST['email']);
    $pass = mysqli_real_escape_string($database,$_POST['password']);

    $sel_user = "select * from admin where user_email='$email' AND user_pass='$pass'";

    $run_user = mysqli_query($database, $sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==1){

        $_SESSION['user_email']=$email;

        echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";

    }
    else {

        echo "<script>alert('Password or Email is wrong, try again!')</script>";

    }


}-->













?>