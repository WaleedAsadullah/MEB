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
        <title>Students - The Brainic School</title>

        <link href="assets/plugins/tablesaw/dist/tablesaw.css" rel="stylesheet" type="text/css" />

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

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">

                                    <h4 class="m-t-0 header-title"><b>Report card</b></h4>
                                    
                                    <table class="tablesaw m-t-20 table m-b-0" data-tablesaw-mode="stack">
                                        <thead>
                                        <tr>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Subject</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Marks</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Total Marks</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">Percentage</th>
                                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Grade</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                       <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Subject 1</td>
                                            <td>78</td>
                                            <td>100</td>
                                            <td>76%</td>
                                            <td>A</td>
                                        </tr>
                                    </tbody>
                                    </table>
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

        <!-- Tablesaw js -->
        <script src="assets/plugins/tablesaw/dist/tablesaw.js"></script>
        <script src="assets/plugins/tablesaw/dist/tablesaw-init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    
</body>
</html>