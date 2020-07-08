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

<body class="smallscreen fixed-left-void">
    <div id="wrapper" class="enlarged">


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
                            <div class="col-lg-12">
                                <div class="card-box">
                                     <div class="m-t-5 m-b-5" style="text-align: center" >
                                         <a  href="admin-mod-student-addmission-form.php" > <button type="button" class="btn btn-primary btn w-md waves-effect waves-light"  >+ Addmission</button></a>
                                        <a> <button type="button" class="btn btn-info btn w-md waves-effect waves-light" > Export </button></a>
                                    </div>
                                </div>
                            </div>
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

                                    <h4 class="header-title m-t-0 m-b-30">Payroll Calculation</h4>

                                    <div class="table-responsive">
                                        <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered">
                                            <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>Employee code</th>
                                                <th>Employee name</th>
                                                <th>Designation</th>
                                                <th>Attendance</th>
                                                <th>Basic salary</th>
                                                <th>House R/A</th>
                                                <th>Utility</th>
                                                <th>Convey allow</th>
                                                <th>Gross salary</th>
                                                <th>Loan</th>
                                                <th>I.T</th>
                                                <th>S.W.F</th>
                                                <th>Advance</th>
                                                <th>Leave W/O pay</th>
                                                <th>Net pay</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>
                                                    <th><input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></th>


                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Office Assistant</td>
                                                    <td>30</td>
                                                    <td>25,148</td>
                                                    <td>11,317</td>
                                                    <td>2,515</td>
                                                    <td>300</td>
                                                    <td>39,280</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>39,280</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Office Assistant</td>
                                                    <td>30</td>
                                                    <td>25,148</td>
                                                    <td>11,317</td>
                                                    <td>2,515</td>
                                                    <td>300</td>
                                                    <td>39,280</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>39,280</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Office Assistant</td>
                                                    <td>30</td>
                                                    <td>25,148</td>
                                                    <td>11,317</td>
                                                    <td>2,515</td>
                                                    <td>300</td>
                                                    <td>39,280</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>39,280</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>00001</td>
                                                    <td>Mr.Fasial Rasheed</td>
                                                    <td>Office Assistant</td>
                                                    <td>30</td>
                                                    <td>25,148</td>
                                                    <td>11,317</td>
                                                    <td>2,515</td>
                                                    <td>300</td>
                                                    <td>39,280</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>39,280</td>
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

            <!-- Form -->
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Payroll calculation form </h4>

                                        <form action="#" novalidate="">


                                            <div class="form-group">
                                                <label for="prID">Employee code  </label>
                                                <input type="text"  parsley-trigger="change" required="" placeholder="Enter employee code" class="form-control" id="prID" data-parsley-id="4">
                                            </div>
                                        
                                   
                                            <div class="form-group">
                                                <label for="prName">Employee Name </label>
                                                <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter employee name" class="form-control" id="prName" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="prRegular">Designation</label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter designation" class="form-control" id="prRegular" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="prVacation">Attendance</label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter attendance" class="form-control" id="prVacation" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="prSick">Basic salary</label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter basic salary" class="form-control" id="prSick" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="zaClass">House R/A </label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter house R/A" class="form-control" id="prOvertime" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="prGross">Utility</label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter utility" class="form-control" id="prGross" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="prTaxes">Convey Allow </label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter convey allow" class="form-control" id="prTaxes" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="prTaxes">Gross Salary</label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter gross salay" class="form-control" id="prTaxes" data-parsley-id="6">
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5"></div>
                                                <div class="col-lg-2">
                                                    <label>Deductions</label>
                                                </div>
                                                <div class="col-lg-5"></div>   
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="prTaxes">Loan</label>
                                                        <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter loan" class="form-control" id="prTaxes" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="prTaxes">I.T</label>
                                                        <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter I.T" class="form-control" id="prTaxes" data-parsley-id="6">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="prTaxes">S.W.F</label>
                                                        <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter S.W.F" class="form-control" id="prTaxes" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="prTaxes">Advance</label>
                                                        <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter advance" class="form-control" id="prTaxes" data-parsley-id="6">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="prTaxes">Leave W/O pay</label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter leave W/O pay" class="form-control" id="prTaxes" data-parsley-id="6">
                                            </div>

                                            <div class="form-group">
                                                <label for="prTaxes">Net pay</label>
                                                <input type="number" name="number" parsley-trigger="change" required="" placeholder="Enter net pay" class="form-control" id="prTaxes" data-parsley-id="6">
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
            <!-- Form end -->





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