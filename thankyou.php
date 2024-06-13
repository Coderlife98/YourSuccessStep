<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YourSuccessSteps || Thank You </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include ('./includes/link.php'); ?>
    <style>
        .tha_sm{
            width: 350px;
            height: 350px;
        }
        @media (max-width:992px) {
            .set-this {
                object-fit: contain;
                width: 100%;
                /* margin-top: 86px; */
            }
            .margin{
                margin: 30px 0px 20px 0px;
            }
        }

        @media (min-width:768px) {
            .set-this {
                object-fit: cover;
                width: 100%;
                /* margin-top: 86px; */
            }
            .margin{
                margin: 30px 0px 20px 0px;
            }
        }
    </style>
</head>

<body>
    <?php include ("includes/header.php"); ?>


    <div class="container-fluid">
        <div class="row">
            <div class="txt-th px-0">
                <img src="./assets/images/thanku.jpg" class="set-this" alt="">
                <div class="breatcome_title sunn-th">
                  
                </div>
            </div>
        </div>
    </div>




    <!-- main-area -->
    <main>
        <section style="background:linear-gradient(to left,#0F3C5C,#00142E) ;">
            <div class="container" >
                <div class="row" style="padding:50px 15px">
                    <div class="col-12 col-md-6  margin d-flex  justify-content-center ">
                        <div class="thimg">
                            <img src="./assets/images/thank.svg" class="tha_sm" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 margin  d-flex align-items-center">
                        <div class="container" style=" color:white">
                            <?php
                            echo $_SESSION['response'];
                            ?>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>
    <!-- main-area-end -->

    <?php include ('./includes/footer.php'); ?>

    <?php include ('./includes/script.php'); ?>
</body>

</html>