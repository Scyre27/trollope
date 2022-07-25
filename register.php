<?php
include "includes/functions.inc.php";
if (isset($loggedInfo)) {
    header("Location: ./dashboard");
}
include "functions/register.func.php";
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from troloppe.ahsankesrani.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 07:43:59 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Troloppe | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='assest/images/logo.png' />

    <style>
        .err {
            color: red;
            font-size: 14px;
            font-weight: bold;
            margin-left: 12px;
            margin-top: -10px;
            margin-bottom: 5px;
            display: none;
        }
    </style>
</head>

<body id="registerPage">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <h3>Register</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(assest/images/3.jpg);">
                        </div>
                        <div class="login-wrap p-4">
                            <div class="d-flex">
                                <div class="w-100">
                                    <img src="assest/images/logo.png" class="img-fuild">
                                </div>
                            </div>
                            <form class="card-body row" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" id="register">
                                <input type="hidden" name="_token" value="yUyHgN8AQ8w6A4RbU3Lka0h8UP5fVsGhuU3sSNkY">
                                <div class="form-group mb-3 col-md-6">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" aria-label="First name" required value="<?php if (isset($_POST['fname'])) {
                                                                                                                                                                echo $_POST['fname'];
                                                                                                                                                            } ?>" />
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <input type="text" class="form-control" name="sname" placeholder="Last Name" aria-label="Last name" required value="<?php if (isset($_POST['sname'])) {
                                                                                                                                                            echo $_POST['sname'];
                                                                                                                                                        } ?>" />
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email address" aria-label="email" required value="<?php if (isset($_POST['email'])) {
                                                                                                                                                                    echo $_POST['email'];
                                                                                                                                                                } ?>" />
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="password" required value="<?php if (isset($_POST['password'])) {
                                                                                                                                                                    echo $_POST['password'];
                                                                                                                                                                } ?>" />
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <input type="password" class="form-control" name="confirm_password" placeholder=" Confirm Password" aria-label="Confirm password" required value="<?php if (isset($_POST['confirm_password'])) {
                                                                                                                                                                                            echo $_POST['confirm_password'];
                                                                                                                                                                                        } ?>" />
                                </div>
                                <div class="form-group mb-3 col-md-12">
                                    <input type="file" class="form-control" name="profile" accept="image/*" />
                                </div>
                                <div class="field_error err"></div>

                                <div class="form-group col-md-12 ">
                                    <button type="submit" class="form-control btn btn-primary rounded px-3">Register</button>
                                </div>

                                <div class="form-group d-md-flex col-md-12">
                                    <div class="w-100">
                                        <a href="./">Already have account? Login</a>
                                    </div>
                                </div>
                            </form>
                            <p class="col-md-12">Terms of use . <a href="#">Privacy policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.html"></script>
    <script src="assets/js/popper.html"></script>
    <script src="assets/js/bootstrap.min.html"></script>
    <script src="assets/js/main.html"></script>
    <script src="./src/js/register.js"></script>

</body>


<!-- Mirrored from troloppe.ahsankesrani.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 May 2022 07:43:59 GMT -->

</html>