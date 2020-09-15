

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ogapredictor - Home</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style1.css" rel="stylesheet" />
    <link href="assets/css/style2.css" rel="stylesheet" />
</head>

<body>



    <!--======= MAIN AREA CONTAINER START ===--->
    <div class="main-area-container">




        <!--=== top start ===--->
        <div class="top">

            <?php include 'desktop-header.php'; ?>
            <?php include 'mobile-header.php'; ?>
        </div>
        <!--== top end ===--->

        <!--=== bottom start ===--->
        <div class="bottom">




            <!--=== left start===-->
            <div class="left">

                <?php include 'desktop-left-menu.php'; ?>
                <?php include 'desktop-footer.php'; ?>

            </div>
            <!--=== left end===-->


            <!--=== right start ===--->
            <div class="right">


                <!-- history wrapper start --->
                <div class="history-wrapper">

                   <div class="tab-container">
                       <a class="tab active">predictions</a>
                       <a class="tab">challenges</a>
                       <a class="tab">Jackpots</a>
                       <a class="tab">Matches</a>
                      
                      
                   </div>

                    <div class="history-container">

                       <table>
                           <thead>
                               <th> No.</th>
                               <th>Date</th>
                               <th>Slip ID</th>
                               <th>Status</th>
                               <th>Action</th>
                           </thead>
                           <tbody>
                               <?php
                               $x  = 0;
                               $y = 0;
                               while($x <5){
                                   $y++;
                                   ?>
                               <tr>
                                   <td><b><?php echo $y; ?>.</b></td>
                                   <td>21/09/2020</td>
                                   <td> 35YDGHK</td>
                                   <td>Running..</td>
                                   <td><a href="betslip.php" class="btn btn-info">view slip</a></td>
                               </tr>
                               <?php
                               $x++;
                               }
                               ?>
                           </tbody>

                       </table>

                        
                    </div>

                </div>
                <!-- history wrapper start --->






                <?php include 'mobile-footer.php'; ?>

            </div>
            <!--=== right end ===--->


        </div>
        <!--=== bottom end ===--->

    </div>


    <!--======= MAIN AREA CONTAINER START ===--->





    <?php include 'mobile-bottom-menu.php'; ?>
    <?php include 'loader.php'; ?>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main1.js"></script>
</body>

</html>