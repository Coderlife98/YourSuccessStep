<!doctype html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
   <?php include("./includes/link.php");?>
</head>
<body>
     <!--  Preloader  -->
    <div class="preloader">
        <span class="loader"></span>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center rounded" aria-label="scroll Bar Button"><i class="mat-icon fs-four nb4-color ti ti-arrow-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->

    <!-- Contact start -->
    <section class="sign nb4-bg h-100 d-flex align-items-center position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="assets/images/star.png" alt="vector" class="position-absolute push_animat">
        </div>
        <div class="container ">
            <div class="row align-items-center justify-content-center justify-content-xl-start">
                <div class="col-12 col-sm-10 col-md-6">
                    <div class="welcome alt-color text-center text-md-start pt-120 pb-120 position-relative z-0">
                        <h1 class="display-one">Welcome Back!</h1>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xxl-5 offset-xxl-1 text-center ms-xl-auto mx-auto">
                    <div class="sign__content ms-md-5 ms-xxl-0 pt-120 pb-120">
                        <div class="head_part">
                            <a href="index.php"> <img src="assets/images/logo_success.png" width="350px" alt="Logo"></a>
                            <h5 class="mt-5 mt-lg-6">Login in Here</h5>
                        </div>
                        <form method="POST" action="" autocomplete="off" id="frmContactus" class="contact__form mt-8 mt-lg-10 text-start">
                            <div class="d-flex flex-column gap-5 gap-lg-6 ">
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="lname">User Name</label>
                                    <input type="text" class="fs-six-up bg_transparent" name="uname" id="uname" placeholder="Username" required>
                                </div>
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="password">Password</label>
                                    <div class="input-pass">
                                        <input type="password" class="fs-six-up bg_transparent pe-13" name="password" id="password" placeholder="Password" required>
                                        <span class="password-eye-icon"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex align-items-center justify-content-between gap-10 flex-wrap">
                                <label class="checkbox-single d-flex align-items-center nw1-color">
                                    <span class="checkbox-area d-center">
                                        <input type="checkbox">
                                        <span class="checkmark d-center"></span>
                                    </span>
                                    Remember me
                                </label>
                                <a href="#" class="nw1-color">Forgot Password?</a>
                            </div>
                            <div class=" mt-7 mt-lg-8">
                                <button type="submit" class="cmn-btn py-3 px-5 px-lg-6 mt-7 mt-lg-8 w-100 d-center" name="submit" id="submit">Sign In</button>
                            </div>
                        </form>
                        <div class="mt-8 mt-lg-10">
                            <p>Don’t have an account? <a href="signup.php">Register Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->
<?php include("./includes/script.php");?>
</body>

</html>