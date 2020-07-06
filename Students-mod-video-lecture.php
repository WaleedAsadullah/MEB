<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- App title -->
        <title>Students - The Brainic Schooll</title>

        <!-- App CSS -->
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
                                <div class="row" style="display: flex; height: 100vh">
                                    <div class="card-box" style="padding-left: 3px" style="height: 100vh">
                                        <ol>
                                            <h5 style="border-bottom: 1px solid white; padding-bottom: 6px; width: 70%"><b>Lectures</b></h5>
                                            <li style="margin-bottom: 20px"><b>Maths</b>
                                                <ol class="list-unstyled">
                                                <li>Chapter 1</li>
                                                <li>Chapter 2</li>
                                                <li>Chapter 3</li>
                                                <li>Chapter 4</li>
                                                </ol>
                                            </li>
                                            <li style="margin-bottom: 20px"><b>English</b>
                                                <ol class="list-unstyled">
                                                <li>Chapter 1</li>
                                                <li>Chapter 2</li>
                                                <li>Chapter 3</li>
                                                <li>Chapter 4</li>
                                                </ol>
                                            </li>
                                            <li style="margin-bottom: 20px"><b>Science</b>
                                                <ol class="list-unstyled">
                                                <li>Chapter 1</li>
                                                <li>Chapter 2</li>
                                                <li>Chapter 3</li>
                                                <li>Chapter 4</li>
                                                </ol>
                                            </li>
                                        </ol>                                  
                                    </div>
                                    <div style="margin: 20px">
                                        <video width="900px" controls="">
                                            
                                        </video>
                                        
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