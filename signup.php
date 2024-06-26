<!doctype html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Signup</title>
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
                <div class="col-12 col-md-6 col-lg-5 col-xxl-5 offset-xxl-1 text-center ms-xl-auto">
                    <div class="sign__content ms-md-5 ms-xxl-0 pt-120 pb-120">
                        <div class="head_part">
                            <a href="index.php"> <img src="assets/images/logo_success.png" alt="Logo"></a>
                            <h5 class="mt-5 mt-lg-6">Sign up to Your Account</h5>
                        </div>
                        <form method="POST" autocomplete="off" id="frmContactus" class="contact__form mt-8 mt-lg-10  text-start">
                            <div class="d-flex flex-column gap-5 gap-lg-6 ">
                                <div class="row g-5 g-lg-6">
                                    <div class="col-sm-6 col-md-12 col-xl-6">
                                        <div class="single-input">
                                            <label class="mb-2 nw1-color " for="fname">First Name</label>
                                            <input type="text" class="fs-six-up bg_transparent" name="fname" id="fname" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-xl-6">
                                        <div class="single-input">
                                            <label class="mb-2 nw1-color" for="lname">Last Name</label>
                                            <input type="text" class="fs-six-up bg_transparent" name="lname" id="lname" placeholder="Name" required>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="cpassword">Confirm Password</label>
                                    <div class="input-pass">
                                        <input type="password" class="fs-six-up bg_transparent pe-13" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
                                        <span class="password-eye-icon"></span>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <label class="mb-2 nw1-color" for="email">Email</label>
                                    <input type="email" class="fs-six-up bg_transparent" name="email" id="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <label class="checkbox-single d-flex align-items-center nw1-color mt-3">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark d-center"></span>
                                </span>
                                I accept the privacy policy
                            </label>
                            <div class=" mt-7 mt-lg-8">
                                <button type="submit" class="cmn-btn py-3 px-5 px-lg-6 mt-7 mt-lg-8 w-100 d-center" name="submit" id="submit">Sign Up</button>
                            </div>
                        </form>
                        <div class="mt-8 mt-lg-10">
                            <p>Already have an account? <a href="signin.php">Log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php include("./includes/script.php");?>
</body>

</html>