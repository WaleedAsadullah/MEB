<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <title>Admin - The Brainic School</title>

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
                            include_once("Admin-mod-header.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Admin-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->
                
                




            <!-- attendance table -->

            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                     <div style="text-align: center" >
                                         <a  href="admin-mod-student-attendance-form.php" > <button type="button" class="btn btn-primary btn w-md waves-effect waves-light m-b-5"  >+  Add</button></a>
                                        <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light m-b-5" > Export </button></a>
                                    </div>
                                </div>
                            </div>

                            <!-- input form -->


                            <!-- input form -->
                                <div class="col-lg-12">
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

                                    <h4 class="header-title m-t-0 m-b-30">Attendance Sheet</h4>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Print</th>
                                                <th>Clone</th>
                                                <th>Student Name</th>
                                                <th>Seat No.</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Class</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Ali Haider</td>
                                                    <td>00001</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-danger">Absent</span></td>
                                                    <td>1st</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Hamza Farooq</td>
                                                    <td>00006</td>
                                                    <td>26/04/2016</td>
                                                    <td><span class="label label-success">Present</span></td>
                                                    <td>3rd</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Fraooq Khan</td>
                                                    <td>00076</td>
                                                    <td>10/05/2016</td>
                                                    <td><span class="label label-pink">Late</span></td>
                                                    <td>10th</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Fazal Khan</td>
                                                    <td>00087</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-success">Present</span>
                                                    </td>
                                                    <td>8th</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Fazeel Ali</td>
                                                    <td>01/01/2016</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-warning">Excused</span></td>
                                                    <td>4th</td>
                                                </tr>

                                                <tr>
                                                    <td>6</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Ammar Rauf</td>
                                                    <td>00949</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-primary">Alerts on Absences</span></td>
                                                    <td>7th</td>
                                                </tr>

                                                <tr>
                                                    <td>7</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>Abdullah Asad</td>
                                                    <td>00753</td>
                                                    <td>31/05/2016</td>
                                                    <td><span class="label label-success">Present</span></td>
                                                    <td>5th</td>
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
            </dir>
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