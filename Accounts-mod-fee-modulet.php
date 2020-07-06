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

                                    <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fees Table</h4>

                                    <div class="table-responsive">
                                        <table class="table" id="adadmissiontable">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Print</th>
                                                <th>Clone</th>
                                                <th>Roll No.</th>
                                                <th>Name of Student/th>
                                                <th>Class</th>
                                                <th>Fees for the Month</th>
                                                <th>Admission Fee</th>
                                                <th>Exam & other Activities</th>
                                                <th>Fine</th>
                                                <th>Mics/th>
                                                <th>Total</th>
                                                <th>Date</th>
                                                <th>Cashier</th>
                                            </tr>
                                            </thead>

                                            <tbody id="addFrmPrint">
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

                                                </tr>
                                                <tr >
                                                    <td>1</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td><i class="zmdi zmdi-delete" onclick="deleteTable('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-local-printshop" onclick="myPrint('addFrmPrint')"></i></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>
                                                    <td>EP1866051</td>
                                                    <td>waleed asad</td>
                                                    <td>8th</td>
                                                    <td>3000</td>
                                                    <td>1500</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>4500</td>
                                                    <td>7/3/2020</td>
                                                    <td>Kashif</td>
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





             <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div >
                                        <div>
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

                                        <h4 class="header-title m-t-0 m-b-5" style="text-align: center; font-size: 22px; padding: 10px"> Fee Form </h4>
                                        <br>

                                        <form action="#" novalidate="">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feSno">S No.</label>
                                                        <input type="text"  parsley-trigger="change" required="" class="form-control" id="feSno" data-parsley-id="6">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feRollNo">Roll No. </label>
                                                        <input type="text"  parsley-trigger="change" required="" placeholder="Enter roll no." class="form-control" id="feRollNo" data-parsley-id="4">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feNameOfStudent">Name of Student</label>
                                                        <input id="feNameOfStudent" type="text" placeholder="Enter name of student" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">  
                                                    <div class="form-group">
                                                        <label for="feClass">Class</label>
                                                        <input id="feClass" type="text" placeholder="Enter class" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Fees for the Month</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" placeholder="Enter amount" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Admission Fee</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" placeholder="Enter amount" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Exams and Other Activities</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" placeholder="Enter amount" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Fine</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" placeholder="Enter amount" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Mics</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" placeholder="Enter amount" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label><h3>Total</h3></label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">  
                                                    <div class="form-group">
                                                        <input  type="number" placeholder="Total amount" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="feNameOfStudent">Date</label>
                                                        <input id="feNameOfStudent" type="date" placeholder="Enter name of student" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">  
                                                    <div class="form-group">
                                                        <label for="feClass">Cashier</label>
                                                        <input id="feClass" type="text" placeholder="Enter class" required="" class="form-control" data-parsley-id="8">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-right m-b-0 m-t-10">
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



</body>
</html>