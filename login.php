<<<<<<< HEAD
<!--     Create Login form here and on success redirect user to the dashboard    -->

<!--
    Login
    
    Authenticate member or admin login credentials
    and login user into library management system 
    
    •	Email address (Member username)
    •	Password

System is to utilize a single sign-on location for all users (members and admins). Logged in sessions shall last no more than 2 hours.

-->
<?php
include_once("src/inc/header.inc.php");

?>

<div class="container-lg d-flex justify-content-center align-items-center" style="margin-top: 100px;">
    <!--     Create Login form here and on success redirect user to the dashboard    -->
    <section class="container-form col bd-content ps-lg-2">

        <h1>Log in</h1><br><br>
        <form class="col align-self-center" action="#" method="post">

            <div class="row mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="username" name="username">
                    <div id="emailHelp" class="form-text">Use your email address to log in.</div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="pass" class="form-label">Password</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>

            <button type="submit" id="black-button" name="submit" class="btn btn-primary btn-sm mb-3">Submit</button>


        </form>



        <div style="padding: 12px;">
            <p class="">
                <br><br>
                Dont have an account? Register Today!
                <br>
                <a href="signup.php" id="black-button" class="btn btn-primary btn-sm mb-3" type="button" style="margin-left: 0px;margin-top: 10px;">Sign up</a>
            </p>
        </div>

    </section>
</div>



<?php
include_once("src/inc/footer.inc.php");
=======
<!--     Create Login form here and on success redirect user to the dashboard    -->

<!--
    Login
    
    Authenticate member or admin login credentials
    and login user into library management system 
    
    •	Email address (Member username)
    •	Password

System is to utilize a single sign-on location for all users (members and admins). Logged in sessions shall last no more than 2 hours.

-->
<?php
include_once("src/inc/header.inc.php");

?>

<div class="container-lg d-flex justify-content-center align-items-center" style="margin-top: 100px;">
    <!--     Create Login form here and on success redirect user to the dashboard    -->
    <section class="container-form col bd-content ps-lg-2">

        <h1>Log in</h1><br><br>
        <form class="col align-self-center" action="#" method="post">

            <div class="row mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="username" name="username">
                    <div id="emailHelp" class="form-text">Use your email address to log in.</div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="pass" class="form-label">Password</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>

            <button type="submit" id="black-button" name="submit" class="btn btn-primary btn-sm mb-3">Submit</button>


        </form>



        <div style="padding: 12px;">
            <p class="">
                <br><br>
                Dont have an account? Register Today!
                <br>
                <a href="signup.php" id="black-button" class="btn btn-primary btn-sm mb-3" type="button" style="margin-left: 0px;margin-top: 10px;">Sign up</a>
            </p>
        </div>

    </section>
</div>



<?php
include_once("src/inc/footer.inc.php");
>>>>>>> 486d0be1380346fcddad29b0083c76647a6d436a
?>