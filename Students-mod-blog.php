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

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- SECTION FILTER
                        ================================================== -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="portfolioFilter">
                                    <a href="#" data-filter="*" class="current waves-effect waves-custom">All</a>
                                    <a href="#" data-filter=".natural" class="waves-effect waves-custom">Event</a>
                                    <a href="#" data-filter=".creative" class="waves-effect waves-custom">Function</a>
                                    <a href="#" data-filter=".personal" class="waves-effect waves-custom">Stuff</a>
                                    <a href="#" data-filter=".photography" class="waves-effect waves-custom">Photography</a>
                                </div>
                            </div>
                        </div>

                        <div class="row port m-b-20">
                            <div class="portfolioContainer">
                                <div class="col-sm-6 col-lg-3 col-md-4 natural personal">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                            <img src="assets/images/gallery/a1.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Nature Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 creative personal photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/2.jpg" class="image-popup" title="Screenshot-2">
                                            <img src="assets/images/gallery/a2.png" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 natural creative">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/3.jpg" class="image-popup" title="Screenshot-3">
                                            <img src="assets/images/gallery/a3.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 personal photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/4.jpg" class="image-popup" title="Screenshot-4">
                                            <img src="assets/images/gallery/a4.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row port m-b-20">
                            <div class="portfolioContainer">

                                <div class="col-sm-6 col-lg-3 col-md-4 creative photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/5.jpg" class="image-popup" title="Screenshot-5">
                                            <img src="assets/images/gallery/a5.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>

                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 natural photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/6.jpg" class="image-popup" title="Screenshot-6">
                                            <img src="assets/images/gallery/6.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 personal photography creative">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/7.jpg" class="image-popup" title="Screenshot-7">
                                            <img src="assets/images/gallery/7.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 creative photography natural">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/8.jpg" class="image-popup" title="Screenshot-8">
                                            <img src="assets/images/gallery/8.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row port m-b-20">
                            <div class="portfolioContainer">

                                <div class="col-sm-6 col-lg-3 col-md-4 natural personal">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/9.jpg" class="image-popup" title="Screenshot-9">
                                            <img src="assets/images/gallery/9.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 photography creative">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/10.jpg" class="image-popup" title="Screenshot-10">
                                            <img src="assets/images/gallery/10.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 creative photography">
                                    <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/11.jpg" class="image-popup" title="Screenshot-11">
                                            <img src="assets/images/gallery/11.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-3 col-md-4 natural creative personal">
                                        <div class="gal-detail thumb">
                                        <a href="assets/images/gallery/12.jpg" class="image-popup" title="Screenshot-12">
                                            <img src="assets/images/gallery/12.jpg" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4>Gallary Image</h4>
                                        <p class="text-muted">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo,
                                            iste itaque voluptas corrupti ratione reprehenderit magni similique.
                                        </p>
                                    </div>
                                </div>

                            </div><!-- end portfoliocontainer-->
                        </div> <!-- End row -->


                    </div> <!-- container -->

                </div> <!-- content -->

               <!-- footer -->
                <?php 
                            include_once("footer.php")
                    ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
 <!--            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div> -->
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
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

</body>
</html>