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
        <style>
            video {
              width: 100%;
              height: auto;
            }
            select,option{
                border: none;
            }
            .ul1{
                padding: 0px 0px 0px 0px;
            }
            .ul1>.li1{
                cursor: pointer;
                font-size:20px ;
                color: hsla(0,0%,100%,.5);
                display: block;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                padding: 1em;
                font-weight: 400;
                text-decoration: none;
                border-bottom: 1px solid #98a6ad;
            }
            .ol1{
                display: block;
                margin-top: 10px;
                text-decoration: none;
                list-style-type:none;
            }
            .li2{
                padding:10px;
                border-bottom: 0.5px solid #98a6ad;
                cursor: pointer;
            }
            .ol1n{
                display: none;
            }

        </style>
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


        <!-- content -->
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card-box" style="padding: 20px 0px;">
                                    <h4 class="header-title m-t-0 m-b-30" style="padding-left: 20px">Lectures</h4>
                                    <ul class="ul1">
                                        <li class="li1" id="sci">Science</li>
                                        <ul class="ol1" id="scinone">
                                            <li class="li2">1. Chapter # 1</li>
                                            <li class="li2">2. Chapter # 2</li>
                                            <li class="li2">3. Chapter # 3</li>
                                            <li class="li2">4. Chapter # 4</li>
                                            <li class="li2">5. Chapter # 5</li>
                                            <li class="li2">6. Chapter # 6</li>
                                        </ul>
                                    </ul>
                                    <ul class="ul1">
                                        <li class="li1" id="maths">Maths</li>
                                        <ul class="ol1" id="mathsnone">
                                            <li class="li2">1. Chapter # 1</li>
                                            <li class="li2">2. Chapter # 2</li>
                                            <li class="li2">3. Chapter # 3</li>
                                            <li class="li2">4. Chapter # 4</li>
                                            <li class="li2">5. Chapter # 5</li>
                                            <li class="li2">6. Chapter # 6</li>
                                        </ul>
                                    </ul>
                                    <ul class="ul1">
                                        <li class="li1" id="eng">English</li>
                                        <ul class="ol1" id="engnone">
                                            <li class="li2">1. Chapter # 1</li>
                                            <li class="li2">2. Chapter # 2</li>
                                            <li class="li2">3. Chapter # 3</li>
                                            <li class="li2">4. Chapter # 4</li>
                                            <li class="li2">5. Chapter # 5</li>
                                            <li class="li2">6. Chapter # 6</li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div>
                                    <video controls></video>
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

        <script>
            $("#sci").click(function(){
            $("#scinone").toggleClass("ol1n");
            })
            $("#maths").click(function(){
            $("#mathsnone").toggleClass("ol1n");
            })
            $("#eng").click(function(){
            $("#engnone").toggleClass("ol1n");
            })
        </script>

</body>
</html>





