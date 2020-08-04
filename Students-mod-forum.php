<?php
include_once('session_end.php');
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

          <title>The Brainic School</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
</head>
<body class="fixed-left">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("Students-mod-header.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Students-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->
                                <!-- Form teacher -->
             <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div>
                                <div class="col-lg-12">
                                    <div >
                                <div class="card-box">
                                    <br>

                                    <h4 class="header-title m-t-0 m-b-30" style="text-align: center; font-size: 22px"> Student's Form</h4>
                                    <br>

                                    <form action="#" data-parsley-validate="" novalidate="">

                                        <div class="form-group">
                                            <label for="userName">Student's Name *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter your name" class="form-control" id="userName" data-parsley-id="4">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailAddress">Class *</label>
                                            <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter your class" class="form-control" id="emailAddress" data-parsley-id="6">
                                        </div>

                                        <div class="form-group">
                                            <label for="userName">Subject *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Roll Number *</label>
                                            <input id="pass1" type="password" placeholder="Roll number" required="" class="form-control" data-parsley-id="8">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Dropdown1 *</label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">menu 1</option>
                                                            <option value="2">menu 2</option>
                                                            <option value="3">menu 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Dropdown2 *</label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">menu 1</option>
                                                            <option value="2">menu 2</option>
                                                            <option value="3">menu 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="passWord2">Feedback *</label>
                                            <div >
                                                <textarea class="form-control" rows="5" placeholder="feedback area ....."></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

                               
    </div>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- isotope filter plugin -->
        <script type="text/javascript" src="assets/plugins/isotope/dist/isotope.pkgd.min.js"></script>

        <!-- Magnific popup -->
        <script type="text/javascript" src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>
</body>
</html>