<!doctype html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php include ("./includes/link.php"); ?>
</head>

<body>
    <?php include ("./includes/header.php"); ?>

    <!-- banner section start-->
    <section class="banner-section cs_hero  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4">Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Contact</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- Contact start -->
    <section class="contact nb4-bg pt-120 pb-120">
        <div class="container ">
            <div class="row gy-18 justify-content-between">
                <div class="col-12 col-lg-5 col-xl-5">
                    <div class="submissions-area d-flex flex-column gap-8 gap-lg-10">
                        <div class="submissions">
                            <h3 class=""><span class="orange">Your</span>Success <span class="green">Steps</span></h3>
                            <p class="fs-six-up mt-4">For any inquiries, please fill out the form. Alternatively, feel
                                free to reach out via phone. We're here to assist you with any questions or concerns you
                                may have regarding our services.</p>
                        </div>
                        <div
                            class="contact__mail d-flex flex-column gap-5 gap-lg-6 pb-8 pb-lg-10 border-bottom border-color four">
                            <div class="d-flex align-items-center gap-3">
                                <span class="box_12 p1-bg rounded-circle d-center"><i
                                        class="ti ti-message-2 fs-four-up nb4-color"></i></span>
                                <span class="fs-six-up"><a href="mailto:
support@yssteps.com" class="__cf_email__">
                                        support@yssteps.com</a></span>
                            </div>

                        </div>
                        <div class="submissions">
                            <h3>Our socials media</h3>
                            <ul class="social-area d-center justify-content-start gap-2 gap-md-3 mt-7 mt-lg-8">
                                <li>
                                    <a class="d-center cus-rounded-1 fs-four" href="javascript:void(0);"><i
                                            class="ti ti-brand-facebook"></i></a>
                                </li>

                                <li>
                                    <a class="d-center cus-rounded-1 fs-four" href="javascript:void(0);"><i
                                            class="ti ti-brand-instagram"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-6">
                    <form method="POST" autocomplete="off" action="./formhandler.php"
                        class="contact__form alt_form px-4 px-lg-8">
                        <h3 class="contact__title mb-7 mb-md-10 mb-lg-15">Enquiry Form</h3>
                        <div class="d-flex gap-3 gap-sm-5 gap-lg-8 flex-column">
                            <div class="row gap-3 gap-sm-0">
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="text" class="fs-six-up p-2" id="name" name="name"
                                            placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="email" class="fs-six-up p-2" id="email" name="email"
                                            placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row gap-3 gap-sm-0 ">
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="text"
                                            oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                            class="fs-six-up p-2" id="number" name="number" maxlength="10"
                                            placeholder="Number" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-input">
                                        <input type="text" class="fs-six-up p-2" id="address" name="address"
                                            placeholder="Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-single">
                                <textarea class="fs-six-up p-2" name="message" rows="4" placeholder="Message"
                                    id="message" required></textarea>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <div class="outer-box">
                                    <div class="inner-box1 d-flex justify-content-around  align-items-center "
                                        style="border:0.2px solid white;padding: 8px 10px;">
                                        <span class="text-white fw-bolder">Enter Captcha:-</span>
                                        <div class="captcha-box-in d-flex align-items-center ">
                                            <div class="in-colo">
                                                <span id="first"></span>
                                                <span id="plus">+</span>
                                                <span id="second"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <input type="text" id="num" placeholder="Enter Captcha Here" class="set-sum p-2"
                                    onkeyup="myFunction()" />
                            </div>
                        </div>
                        <span id="msg"></span>
                        <button type="submit" onclick="return validate();"
                            class="cmn-btn py-3 px-5 px-lg-6 mt-8 mt-lg-10 d-flex ms-auto" name="submit"
                            id="submit">Send Message<i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                </div>
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43971.77716183882!2d80.22107004789522!3d13.061576143841044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1718177432416!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact end -->

    <?php include ("./includes/footer.php"); ?>
    <script>

        var firstNu = document.getElementById("first");
        var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
        console.log("number1", num1);
        var secNum = document.getElementById("second");
        var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));
        console.log("number2", num2);


        function myFunction() {
            var userInput = document.getElementById("num");
            var inputValu = userInput.value;
            return inputValu;
        }

        var storeRandomValue = parseInt(num1) + parseInt(num2);

        function validate() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var number = document.getElementById("number").value;
            var address = document.getElementById("address").value;
            var message = document.getElementById("message").value;
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            var dued = myFunction();
            if (!name) {
                alert("Please Enter Name");
                return false;
            } else if (!namePattern.test(name)) {
                alert("Enter Valid Name");
                return false;
            } else if (!email) {
                alert("Enter Email");
                return false;
            } else if (!emailRegex.test(email)) {
                alert("Please Enter Valid Email");
                return false;
            } else if (!number) {
                alert("Enter Mobile Number");
                return false;
            } else if (!phoneRegex.test(number)) {
                alert("Enter Correct Number");
                return false;
            } else if (!message) {
                alert("Enter Message");
                return false;
            } else if (!dued) {
                alert("Please Enter Captcha");
                return false;
            } else if (namePattern.test(dued)) {
                alert("Enter Only Number");
                return false;
            }
            else if (dued != storeRandomValue) {
                alert("Enter Correct Captcha");
                return false;
            }

        }
    </script>
    <?php include ("./includes/script.php"); ?>

</body>

</html>