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
        <title>Account - The Brainic School</title>

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

<body class="smallscreen fixed-left-void">    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("Accounts-mod-header.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Accounts-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->





            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                                <div class="">
                                <div class="card-box">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Payroll Calculation</h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Employee<br>ID</th>
                                                <th>Employee Name</th>
                                                <th>Regular Hours<br>Worked</th>
                                                <th>Vacation<br>Hours</th>
                                                <th>Sick<br>Hours</th>
                                                <th>Over Time<br>Hours</th>
                                                <th>Over Time<br>Rate</th>
                                                <th>Gross<br>Pay</th>
                                                <th>Taxes and<br>Deductions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Arham</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Waleed</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Asad</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Farooq</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>
                                                <<tr>
                                                    <td>5</td>
                                                    <td>Fazeel</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Ali</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Hassan</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Umar</td>
                                                    <td>50</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>25</td>
                                                    <td>Rs.50000.00</td>
                                                    <td>4000.00</td>
                                                </tr>

                                            </tbody>
                                        </table>
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